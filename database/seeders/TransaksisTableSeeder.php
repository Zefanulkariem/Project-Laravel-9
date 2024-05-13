<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang'=>1, 'id_pembeli'=>1, 'jumlah'=> 1, 'tanggal_transaksi'=>'2019-06-02'],
            ['id_barang'=>1, 'id_pembeli'=>1, 'jumlah'=> 1, 'tanggal_transaksi'=>'2020-05-23'],
            ['id_barang'=>2, 'id_pembeli'=>2, 'jumlah'=> 1, 'tanggal_transaksi'=>'2021-04-12'],
            ['id_barang'=>2, 'id_pembeli'=>2, 'jumlah'=> 1, 'tanggal_transaksi'=>'2022-03-14'],
            ['id_barang'=>3, 'id_pembeli'=>3, 'jumlah'=> 1, 'tanggal_transaksi'=>'2023-02-11'],
            ['id_barang'=>3, 'id_pembeli'=>3, 'jumlah'=> 1, 'tanggal_transaksi'=>'2024-01-15'],

        ];

        DB::table('transaksis')->insert($transaksis);
    }
}
