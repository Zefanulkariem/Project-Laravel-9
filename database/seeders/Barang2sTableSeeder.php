<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'Kursi', 'harga' => '30000', 'stok' => '12'],
            ['nama_barang' => 'Meja', 'harga' => '80000', 'stok' => '8'],
            ['nama_barang' => 'Kulkas', 'harga' => '1000000', 'stok' => '20']
        ];

        DB::table('barang2s')->insert($barang2s);
    }
}
