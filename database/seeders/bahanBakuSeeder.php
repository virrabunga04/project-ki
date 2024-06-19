<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class bahanBakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('bahan_baku')->insert ([
            [
                'nama_bahan' => 'Bahan 1 x10kg',
                'Tanggal_Masuk' => now(),
                'Tanggal_Kadaluarsa' => now()->addMonths(12),
                'Supplier' => 'Supplier A',
                'jumlah_Stok' => 100,
            ],
            [
                'nama_bahan' => 'Bahan 2 x250g',
                'Tanggal_Masuk' => now(),
                'Tanggal_Kadaluarsa' => now()->addMonths(12),
                'Supplier' => 'Supplier B',
                'jumlah_Stok' => 150,
            ],
        ]);
    }
}
