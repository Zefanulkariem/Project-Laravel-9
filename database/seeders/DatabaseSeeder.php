<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(PostsTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(SiswasTableSeeder::class);
        $this->call(PenggunasTableSeeder::class);
        // $this->call(TablesTableSeeder::class);
        $this->call(TeleponsTableSeeder::class);
        $this->call(MereksTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        $this->call(Barang2sTableSeeder::class);
        $this->call(PembelisTableSeeder::class);
        $this->call(TransaksisTableSeeder::class);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
