<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', function () {     // route kenalan
    return '<h1>Hola!!</h1>'
    . 'Perekenalkan Nama Saya Rafly Aditya Ray. '
    . 'Saya Tinggal di Komp. Permata Kopo, Sayati. '
    . 'Saya Suka warna Biru. '
    . 'Saya asli Orang Minang. '
    . 'Dan Juga Saya bersekolah di SMK Assalaam cuy '
    
    . '<table border=1>'
    . '<tr>'
    . '<td>Saya Rapli'
    . '</td>'
    . '<tr>'
    . '<td>Saya Rapli'
    . '</td>'
    . '</tr>'
    . '</table>';
});

Route::get('animals', function () {           // router basic to view
    $king = 'kikir';
    $hewan = ['monkey', 'dragonfly', 'tiger', 'butterfly', 'crocodile'];
    return view('animals_page', compact('king', 'hewan')); 
});

Route::get('vegetable', function () {         // router basic passing data to view
    $fruit = ['apple', 'grape', 'starfruit', 'melon'];
    return view('vegetable_page', ['buah' => $fruit]); 
});

Route::get('produk/{nama}', function ($nama) {// router parameter
    return "produk: $nama"; 
});

// router parameter nugas
Route::get('badan/{nama}/{berat}/{tinggi}', function ($nama, $berat, $tinggi) {
    $bmi = $berat / (($tinggi / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } else if ($bmi > 25) {
        $ket = "Kelebihan";
    } else if ($bmi > 18.5) {
        $ket = "Ideal";
    } else if ($bmi < 18.5) {
        $ket = "kekurangan Berat badan";
    } 

    return "<h3>Berad Badan</h3>"
    . "Nama: $nama<br>" 
    . "Berat Badan: $berat<br>" 
    . "Tinggi Badan: $tinggi<br>"
    . "Nilai BMI: $bmi<br>"
    . "Keterangan: $ket";
});

Route::get('myname/{nama?}', function($a = "Ali"){              // optinal parmerter
    return "Nami Abdi $a";
});

//menampilkan data dri database

// Route::get('/testmodel', function () {
//     $data = Post::all();
//     return $data;
// });

Route::get('/testbarang', function () {
    $a = Barang::all();
    return $a;
});