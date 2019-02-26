<?php

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
  return view('home');
    // return view('welcome');
})->name('home');

Route::get('/produk	', function () {
  return view('produk');
    // return view('welcome');

})->name('produk');

Route::get('/detail-produk', function () {
  return view('detail-produk');
    // return view('welcome');
})->name('detail-produk');

Route::get('/keranjang', function () {
  return view('keranjang');
    // return view('welcome');
})->name('keranjang');

Route::get('/checkout', function () {
  return view('checkout');
    // return view('welcome');
})->name('checkout');