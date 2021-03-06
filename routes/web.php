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

Route::get('/','FrontController@trending')->name('trending');
Route::get('/makanan','FrontController@makanan')->name('makanan');
Route::get('/minuman','FrontController@minuman')->name('minuman');
Route::get('/dessert','FrontController@dessert')->name('dessert');
Route::get('/my-pesanan','FrontController@mypesanan')->name('mypesanan');

Route::post('/AddMakanan','PelangganController@addMakanan');
Route::get('/getId/{id}/Makanan','PelangganController@getIdMakanan');

Route::get('/pembayaran','KasirController@pembayaran')->name('pembayaran');
Route::get('/transaksi','KasirController@transaksi')->name('transaksi');
Route::get('/transaksi-list','KasirController@allTransaksi')->name('allTransaksi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
