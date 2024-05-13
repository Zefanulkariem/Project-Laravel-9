<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Honda N-BOX',   'jumlah'=>'980','tanggal_produksi'=>'2019-12-02','id_merek'=>1],
            ['nama_produk' => 'Honda N-ONE',   'jumlah'=>'800','tanggal_produksi'=>'2021-04-19','id_merek'=>1],
            ['nama_produk' => 'Honda N-VAN',   'jumlah'=>'800','tanggal_produksi'=>'2023-06-16','id_merek'=>1],
            ['nama_produk' => 'Daihatsu WAKE', 'jumlah'=>'800','tanggal_produksi'=>'2014-07-14','id_merek'=>2],
            ['nama_produk' => 'Daihatsu TANTO','jumlah'=>'800','tanggal_produksi'=>'2023-08-12','id_merek'=>2],
            ['nama_produk' => 'Nissan SAKURA', 'jumlah'=>'800','tanggal_produksi'=>'2024-02-12','id_merek'=>3],
            ['nama_produk' => 'Nissan LEAF',   'jumlah'=>'800','tanggal_produksi'=>'2024-02-11','id_merek'=>3]
        ];

        DB::table('produks')->insert($produks);
    }
}
