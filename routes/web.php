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

Route::get('/', function () {
    // return view('welcome');
    return redirect('pokedex');
});

Route::get('/pokedex', 'App\Http\Controllers\PokeDexController@index')->name('pokedex.index');
Route::post('/pokedex', 'App\Http\Controllers\PokeDexController@store')->name('pokedex.store');
Route::get('/pokedex/{id}', 'App\Http\Controllers\PokeDexController@show')->name('pokedex.show');