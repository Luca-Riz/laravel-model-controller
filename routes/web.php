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

Route::get('/', 'HomeController@home')->name('homepage');

Route::get('/comics', 'ComicController@comics')->name('pagina-prodotti');


// Route::get('/products', nomecontroller@metodocontroller )->name('pagina-prodotti');

//     $comics = config('comics');
//     $data = ['fumetti' => $comics];

//     return view('prodotti', $data);
// })->name('pagina-prodotti');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

