<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'MBA HRD',
                'email'=>'hrd@gmail.com',
                'role'=>'HRD',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'MAS KARYAWAN',
                'email'=>'karyawan@gmail.com',
                'role'=>'Karyawan',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
