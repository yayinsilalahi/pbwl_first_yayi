<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     return view('index');
// });

// Route::get('about', function() {
//     return view('about');
// });

// Route::get('mahasiswa', function() {
//     $npm = [123,124,125,126,127];
//     $nama = ['Najwa Fadiyah Nasution', 'Rosita Panjaitan', 'Tiara Maharani', 'Tri Rahmadani Nasution', 'Yayi Naulia Silalahi'];
//     $jumlah = count($npm);
//     return view('mahasiswa', compact('npm', 'nama', 'jumlah'));
// });

// Route::get('profile', function() {
//     $nama = 'Yayi';
//     return view('profile', compact('nama'));
// });

// Route::get('array', function(){
//     // $nilai_awal = 1;
//     // while ($nilai_awal <= 50) {
//     //     echo 'Hello Laravel ' . $nilai_awal . 'x<br>';
//     //     $nilai_awal++;
//     // }
//     for ($i=1; $i <= 5 ; $i++) { 
//         echo 'Hello World ' . $i . 'x<br>';
//     }
// });
Route::get('mahasiswa', [mahasiswaController::class, 'index']);