<?php



use App\Http\Controllers\AnggotaController;

use App\Http\Controllers\KategoriController;

use App\Http\Controllers\BookController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;

use Illuminate\Http\Request;

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


Route::get('/dashboard', function()
  {
     return view('dashboard');

  })->middleware('auth');


      //BAGIAN DATA BUKU

Route::get('/buku', [BookController::class, 'index'])->name('buku')->middleware('auth');

Route::get('/tambahbuku', [BookController::class, 'tambahbuku']);
Route::post('/insertbuku', [BookController::class, 'insertbuku']);

Route::get('/tampilbuku/{id}', [BookController::class, 'tampilbuku']);
Route::post('/updatebuku/{id}', [BookController::class, 'updatebuku']);

Route::get('/deletebuku/{id}', [BookController::class, 'deletebuku']);



       //BAGIAN DATA KATEGORI

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori')->middleware('auth');

Route::get('/tambahkategori', [KategoriController::class, 'tambahkategori']);
Route::post('/insertkategori', [KategoriController::class, 'insertkategori']);

Route::get('/tampilkategori/{id}', [KategoriController::class, 'tampilkategori']);
Route::post('/updatekategori/{id}', [KategoriController::class, 'updatekategori']);

Route::get('/delete/{id}', [KategoriController::class, 'delete']);


       //  BAGIAN DATA ANGGOTA

Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota')->middleware('auth');

Route::get('/tambahdata', [AnggotaController::class, 'tambahdata']);
Route::post('/insertdata', [AnggotaController::class, 'insertdata']);

Route::get('/tampildata/{id}', [AnggotaController::class, 'tampildata']);
Route::post('/updatedata/{id}', [AnggotaController::class, 'updatedata']);

Route::get('/deletedata/{id}', [AnggotaController::class, 'deletedata']);


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/loginers', [LoginController::class, 'loginers']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/registration', [RegisterController::class, 'registration']);

Route::get('/logout', [LoginController::class, 'logout']);



