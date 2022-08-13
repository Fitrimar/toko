<?php

use App\Http\Controllers\AlamatPengirimanController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukPromoController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomepageController::class,'index']);
Route::get('/about', [App\Http\Controllers\HomepageController::class,'about']);
Route::get('/kontak', [App\Http\Controllers\HomepageController::class,'kontak']);
Route::get('/kategori',[App\Http\Controllers\HomepageController::class,'kategori']);
Route::get('/kategori/{slug}',[App\Http\Controllers\HomepageController::class,'kategoribyslug']);
Route::get('/produk',[App\Http\Controllers\HomepageController::class,'produk']);
Route::get('/produk/{id}',[App\Http\Controllers\HomepageController::class,'produkdetail']);

Route::group(['middleware'=> 'auth'], function(){
   // cart
   Route::resource('cart',CartController::class);
   Route::patch('kosongkan/{id}', [App\Http\Controllers\CartController::class,'kosongkan']);
   // cart detail
  Route::resource('cartdetail', CartDetailController::class);
  // alamat pengiriman
  Route::resource('alamatpengiriman', AlamatPengirimanController::class);
  // checkout
  Route::get('/checkout',[App\Http\Controllers\CartController::class,'checkout']);
});


Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class,'index']);
    // route kategori
    Route::resource('kategori', KategoriController::class);
    // route produk
    Route::resource('produk', ProdukController::class);
    // route customer
    Route::resource('customer',CustomerController::class);
    // route transaksi
    Route::resource('transaksi',TransaksiController::class);
    // profil
    Route::get('/profil',[App\Http\Controllers\UserController::class,'index']);
    // setting profil
    Route::get('/setting',[App\Http\Controllers\UserController::class,'setting']);
      // form laporan
    Route::get('/laporan', [App\Http\Controllers\LaporanController::class,'index']);
    // proses laporan
    Route::get('/proseslaporan',[App\Http\Controllers\LaporanController::class,'proses']);
     //image
     Route::get('/image',[\App\Http\Controllers\ImageController::class,'index']);
     // simpan image
     Route::post('image', [App\Http\Controllers\ImageController::class,'store']);
    // hapus image
    Route::delete('/image/{id}',[App\Http\Controllers\ImageController::class,'destroy']);
    // upload image kategori
    Route::post('/imagekategori',[App\Http\Controllers\KategoriController::class,'uploadimage']);
    // hapus image kategori
    Route::delete('/imagekategori/{id}',[App\Http\Controllers\KategoriController::class,'deleteimage']);
    // upload image produk
    Route::post('/produkimage', [App\Http\Controllers\ProdukController::class,'uploadimage']);
    // hapus image produk
    Route::delete('/produkimage/{id}',[App\Http\Controllers\ProdukController::class,'deleteimage']);
    // slideshow
    Route::resource('slideshow', SlideshowController::class);
    // produk promo
    Route::resource('promo', ProdukPromoController::class);
    // load async produk
    Route::get('/loadprodukasync/{id}', [App\Http\Controllers\ProdukController::class,'loadasync']);
     // wishlist
     Route::resource('wishlist', WishlistController::class);  
  });

Auth::routes();

     // merubah route home ke admin agar tidak error
     Route::get('/home', function() {
      return redirect('/admin');
    });

