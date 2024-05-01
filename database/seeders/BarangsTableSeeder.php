<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['barang'=>'Gurame Suryono', 'jumlah'=>'19'],
            ['barang'=>'Rusdi Kerapu', 'jumlah'=>'15'],
            ['barang'=>'Ipan Kakap', 'jumlah'=>'20']

        ];

        DB::table('barangs')->insert($barangs);
    }
}
