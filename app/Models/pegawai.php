<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['nik', 'nama', 'jenis_kelamin', 'jabatan', 'alamat', 'nomor_telepon', 'tanggal_masuk'];
    protected $table = 'pegawais';
    public $timestamps = false;
}
