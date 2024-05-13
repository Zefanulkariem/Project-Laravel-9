<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class teleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon' => '928316538497', 'pengguna_id' => 1],
            ['nomor_telepon' => '379834578345', 'pengguna_id' => 2],
            ['nomor_telepon' => '876322575128', 'pengguna_id' => 3]
        ];

        DB::table('telepons')->insert($telepons);

    }
}
