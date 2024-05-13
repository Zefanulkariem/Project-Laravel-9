<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama' => 'Bisma Ganteng'],
            ['nama' => 'Iyas Keren'],
            ['nama' => 'Ali Berezeki']
        ];

        DB::table('penggunas')->insert($penggunas);
    }
}
