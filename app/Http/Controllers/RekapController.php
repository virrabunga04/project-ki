<?php

namespace App\Http\Controllers;

use App\Models\rekapanharian;
use Illuminate\Http\Request;


class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    
    public function awal()
    {
        return view('main');
    }

    // public function next()
    // {
    //     return view('rekapan.rekapan');
    // }

     public function index()
    {
        $data = rekapanharian::orderBy('Tanggal', 'desc')->get();
        return view('rekapan.rekapan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rekapan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tanggal' => 'required',
            'Nama_Menu' => 'required',
            'Total_Terjual' => 'required',
            'Subtotal' => 'required',
        ], [
            'Tanggal.required' => 'Tanggal Wajib Diisi',
            'Nama_Menu.required' => 'Nama Menu Wajib Diisi',
            'Total_Terjual.required' => 'Total Terjual Wajib diisi',
            'Subtotal.required' => 'SubTotal Wajib diisi',
        ]);

        $data = [
            'Tanggal' => $request->Tanggal,
            'Nama_Menu' => $request->Nama_Menu,
            'Total_Terjual' => $request->Total_Terjual,
            'Subtotal' => $request->Subtotal
        ];
        rekapanharian::create($data);
        return redirect()->to('penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = rekapanharian::where('Tanggal', $id)->first();
        return view('rekapan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([            
            'Total_Terjual' => 'required',
            'Subtotal' => 'required',
        ], [
            'Total_Terjual.required' => 'Total Terjual Wajib diisi',
            'Subtotal.required' => 'SubTotal Wajib diisi',
        ]);

        $data = [           
            'Total_Terjual' => $request->Total_Terjual,
            'Subtotal' => $request->Subtotal
        ];
        rekapanharian::where('Tanggal', $id)->update($data);
        return redirect()->to('penjualan');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        rekapanharian::where('Tanggal', $id)->delete();
        return redirect()->to('penjualan');
    }
    
}
