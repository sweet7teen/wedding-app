<?php

use App\Http\Controllers\UcapanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/index{id}', function ($id) {
//     return view('index', 'id => $id');
// });

// Route::get('/index/{id}', function ($id) {
//     return view ($id);
// });

// Route::get('/{nama}', function ($nama) {
//     return view('index', ['nama' => $nama]);
// });


// Route::get('/', function () {
//     return view('guest');
// });

//view data
Route::get('/', [UcapanController::class, 'index']);
Route::get('/kepada/{tamu}', [UcapanController::class, 'show']);
// Route::get('/}', [UcapanController::class, 'guest']);

//tambah data
Route::post('/indexadd', [UcapanController::class, 'store']);
//view data javascipt
Route::get('show-read', [UcapanController::class, 'read']);