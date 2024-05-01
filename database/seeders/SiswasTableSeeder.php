<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama'=>'iyas bagus', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85798873452', 'email'=>'yas@gmail.com'],
            ['nama'=>'ghazwan k', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85774530384', 'email'=>'gajo@gmail.com'],
            ['nama'=>'ksatria', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85782540384', 'email'=>'sat@gmail.com'],
            ['nama'=>'cindy', 'jk'=>'p', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85783740384', 'email'=>'cynd@gmail.com'],
            ['nama'=>'alifah', 'jk'=>'p', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85772654945', 'email'=>'fah@gmail.com'],
            ['nama'=>'ali rizki', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85783420565', 'email'=>'ali@gmail.com'],
            ['nama'=>'kiara d', 'jk'=>'p', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85703612965', 'email'=>'kya@gmail.com'],
            ['nama'=>'jelita', 'jk'=>'p', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85773546756', 'email'=>'jlta@gmail.com'],
            ['nama'=>'zahran', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85774437697', 'email'=>'zhrn@gmail.com'],
            ['nama'=>'abdu', 'jk'=>'l', 'alamat'=>'Bandung', 'agama'=>'islam', 'telepon'=>'85754964210', 'email'=>'bedu@gmail.com'],

        ];

        DB::table('siswas')->insert($siswas);
    }
}
