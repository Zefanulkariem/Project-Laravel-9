<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Ghazwan', 'jenis_kelamin' => 'L'],
            ['nama_pembeli' => 'Ksatria', 'jenis_kelamin' => 'L'],
            ['nama_pembeli' => 'Cindy', 'jenis_kelamin' => 'P']
        ];

        DB::table('pembelis')->insert($pembelis);
    }
}
