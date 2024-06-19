<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class menuSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program_paw')->insert([
            [
                'id' => 001,
                'nama_menu' => 'es teh manis',
                'bahan_baku' => '1. teh
                                2. gula pasir',
                'jenis_menu' => 'minuman'
            ],
            [
                'id' => 002,
                'nama_menu' => 'roti bakar',
                'bahan_baku' => '1. roti tawar
                                2. mentega
                                3. selai
                                4. meses',
                'jenis_menu' => 'makanan'
            ],
        ]);
    }
}
