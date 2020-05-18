<?php

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

//Route::get('/', function () {
//    return view('welcome');
//})->name('index');

//Route::get('/', function () {
//    return view('users.index');
//})->name('index');

Route::get('/', 'ProductController@index')->name('index');

Route::get('/prodotti', function () {
    return view('users.prodotti');
})->name('prodotti');

Route::get('/contatti', function () {
    return view('users.contatti');
})->name('contatti');

Route::get('/prodotto/{id}', function ($id) {
    return view('users.prodotto', compact('id'));
})->name('prodotto.show');

//admin
Route::get('admin/prodotti', function () {
    return view('admin.prodotti');
})->name('admin.prodotti');
