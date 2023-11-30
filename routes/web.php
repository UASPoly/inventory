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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    
    Route::name('property.')
    ->prefix('/property')
    ->group(function (){
        Route::get('/', 'PropertyController@index')->name('index');    
        Route::post('/register', 'PropertyController@register')->name('register');    
        Route::post('/{propertyId}/update', 'PropertyController@update')->name('update');    
        Route::get('/{propertyId}/delete', 'PropertyController@delete')->name('delete');        
    });

    
    
});