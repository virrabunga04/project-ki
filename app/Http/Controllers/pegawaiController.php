<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = pegawai::where('nik', 'like',"%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('jenis_kelamin', 'like', "%$katakunci%")
                ->orWhere('jabatan', 'like', "%$katakunci%")
                ->orWhere('alamat', 'like', "%$katakunci")
                ->orWhere('nomor_telepon', 'like', "%$katakunci")
                ->orWhere('nama', 'tanggal_masuk', "%$katakunci%")
                ->paginate($jumlahbaris);
        }else{
            $data = pegawai::orderBy('nik', 'desc')->paginate($jumlahbaris);
        }
        
        return view('pegawai.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nik', $request->nik) ;
        Session::flash('nama', $request->nama);
        Session::flash('jenis_kelamin', $request->jenis_kelamin);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('alamat', $request->alamat);
        Session::flash('nomor_telepon', $request->nomor_telepon);
        Session::flash('tanggal_masuk', $request->tanggal_masuk);

        $request->validate([
            'nik' => 'required|numeric|digits:16|unique:pegawais,nik',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_masuk' => 'required', 
        ],[
            'nik.required'=>'NIK wajib diisi',
            'nik.numeric'=>'NIK wajib dalam bentu angka',
            'nik.digits' => 'NIK harus memiliki panjang 16 digit',
            'nik.unique'=>'NIK yang diisikan sudah ada dalam database',
            'nama.required'=>'Nama wajib diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin wajib diisi',
            'jabatan.required'=>'Jabatan wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'nomor_telepon'=>'No Telepon wajib diisi',
            'tanggal_masuk.required'=>'Tanggal Masuk wajib diisi',
        ]);

        
        $data = [   
               'nik' => $request->nik, 
               'nama' => $request->nama, 
               'jenis_kelamin' => $request->jenis_kelamin,
               'jabatan' => $request->jabatan,
               'alamat' => $request->alamat,
               'nomor_telepon' => $request->nomor_telepon,
               'tanggal_masuk' => $request->tanggal_masuk,
               ];  
                pegawai::create($data);
                 return redirect()->to('pegawai')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nik)
    {
        $data = Pegawai::where('nik', $nik)->first();
    
        if (!$data) {
            return abort(404);
        }
    
        return view('pegawai.show', compact('data'));
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $data = pegawai::where('nik', $id)->first();
    return view('pegawai.edit')->with('data', $data);
}

    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_masuk' => 'required', 
            
        ],[
            'nama.required'=>'Nama wajib diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin wajib diisi',
            'jabatan.required'=>'Jabatan wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'nomor_telepon.required'=>'Nomor Telepon wajib diisi',
            'tanggal_masuk.required'=>'Tanggal Masuk wajib diisi',
        ]);
        
        $data = 
               [
               'jenis_kelamin' => $request->jenis_kelamin,
               'jabatan' => $request->jabatan,
               'alamat' => $request->alamat,
               'nomor_telepon' => $request->nomor_telepon,
               'tanggal_masuk' => $request->tanggal_masuk,
               ];  
               pegawai::where('nik',$id)->update($data);
               return redirect()->to('pegawai')->with('success', 'Berhasil melakukan update data');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pegawai::where('nik', $id)->delete();
        return redirect()->to('pegawai')->with('success', 'Berhasil melakukan delete data');
    }

}