<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class bahanController extends Controller
{
    /**
     *  Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function bahanbaku(){
        $bahan_baku= DB::table('bahan_baku')->get();
        return view ('bahan.bahanbaku', ['bahan_baku' => $bahan_baku]);
    }

    public function add(){
        return view('bahan.add');
    }
    
    public function addProcess(Request $request){
        DB::table('bahan_baku')->insert([
            'nama_bahan' => $request->nama,
            'Tanggal_Masuk' => $request->masuk,
            'Tanggal_Kadaluarsa' => $request->exp,
            'Supplier' => $request->supplier,
            'jumlah_Stok' => $request->jumlah,
        ]);
        return redirect('listStok')->with('status', 'Bahan Baku berhasil ditambahkan!');
    }    

    public function edit($id){
        $edbahan = DB:: table('bahan_baku')-> where('id', $id)->first();
        return view('bahan.edit', compact('edbahan'));
    }

    public function editProcess(Request $request, $id){
        $affectedRows = DB::table('bahan_baku')
            ->where('id', $id)
            ->update([
                'nama_bahan' => $request->nama,
                'jumlah_Stok' => $request->jumlah,
            ]);
    
        if ($affectedRows > 0) {
            return redirect('listStok')->with('status', 'Bahan Baku berhasil diUpdate!');
        } else {
            return redirect('listStok')->with('status', 'Tidak ada perubahan dilakukan.');
        }
    }      

    public function delete($id){
        DB:: table('bahan_baku')-> where('id', $id)->delete();
        return redirect('listStok')-> with('status', 'Bahan Baku berhasil diHapus!');
    }

    public function search(Request $request){
        $search = $request->input('search');
        $bahan_baku = DB::table('bahan_baku')
            ->when($search, function ($query, $search) {
                return $query->where('nama_bahan', 'like', '%' . $search . '%');
            })
            ->get();
    
        return view('bahan.bahanbaku', compact('bahan_baku'));
    }    
}
