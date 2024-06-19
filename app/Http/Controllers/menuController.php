<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class menuController extends Controller {
    /**
     *  Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function daftarMenu(){
        $menu = DB::table('menu')->get(); 
        return view('menu.daftarMenu', ['menu' => $menu]);
    }

    public function detailMenu($id){
        $menu = DB::table('menu')->where('id', $id)->first();
        return view('menu.detailMenu', compact('menu'));
    }

    function index(){
        return view('home');
    }

    public function add(){
        return view('menu.addMenu');
    }

    public function addProcess(Request $request){
        // $request->validate([
        //     'id'=>'required|min:1',
        //     'nama_menu'=>'required',
        //     'jenis_menu'=>'required'
        // ], [
        //     'id.required' => 'ID tidak boleh kosong!',
        //     'nama_menu.required' => 'Nama menu tidak boleh kosong!',
        //     'jenis_menu.required' => 'Jenis menu tidak boleh kosong!'
        // ]);

        DB::table('menu')->insert([
            'id' => $request->id,
            'nama_menu' => $request->nama_menu,
            'bahan_baku' => $request->bahan_baku,
            'jenis_menu' => $request->jenis_menu,
        ]);
        return redirect('menu')->with('status', 'Menu baru berhasil ditambahkan');
    }

    public function edit($id){
        $editmenu = DB::table('menu')->where('id', $id)->first();
        return view('menu.editMenu', compact('editmenu'));
    }
    

    public function editProcess(Request $request, $id){
        // $request->validate([
        //     'id' => 'required|min:2',
        //     'nama_menu' => 'required',
        //     'jenis_menu' => 'required'
        // ], [
        //     'id.required' => 'ID tidak boleh kosong!',
        //     'nama_menu.required' => 'Nama menu tidak boleh kosong!',
        //     'jenis_menu.required' => 'Jenis menu tidak boleh kosong!'
        // ]);
    
        //$affectedRows = DB::table('menu')->where('id', $id)
        DB::table('menu') ->where('id', $id)
            ->update([
            'id' => $request->id,
            'nama_menu' => $request->nama_menu, 
            'bahan_baku' => $request->bahan_baku,
            'jenis_menu' => $request->jenis_menu,
        ]);
    
        //DB::table('menu')->where('id', $id)->update($data);
        return redirect()->to('menu')->with('status', 'Menu berhasil diubah');
    }      

    public function delete($id){
        DB::table('menu')->where('id',$id)->delete();
        return redirect('menu')->with('status', 'Menu berhasil dihapus');
    }

    // public function search(Request $request){
    //     $search = $request->input('search');
    //     $menu = DB::table('menu')->when($search, function($query, $search){
    //         return $query->where('nama_menu', 'like', '%'. $search . '%');
    //     })
    //     ->get();

    //     return view('menu.daftarMenu', compact('menu'));
    // }

}
