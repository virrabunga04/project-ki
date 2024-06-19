<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekapanharian extends Model
{
    use HasFactory;
    protected $fillable = ['Tanggal', 'Nama_Menu', 'Total_Terjual', 'Subtotal'];
    protected $table = 'rekapanharian';
    public $timestamps = false;
}
