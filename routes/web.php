<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/','home@index')->name('home');
Route::post('/postitemlist', 'home@postitemlist')->name('postItemList');
Route::post('/penambahan','home@penambahan')->name('penambahan');
Route::post('/penjualan','home@penjualan')->name('penjualan');
//Route::get('/show','home@show')->name('show');

