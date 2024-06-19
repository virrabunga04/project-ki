<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['nama_menu', 'bahan_baku', 'jenis_menu'];
    protected $table = 'menu';
    public $timestamps = false;
}
