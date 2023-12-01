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
    Route::name('tenant.')
    ->prefix('/tenant')
    ->group(function (){
        Route::post('/register', 'TenantController@register')->name('register');    
        Route::get('/{propertyId}/request', 'TenantController@request')->name('request');    
        
    });
    Route::name('property.')
    ->prefix('/property')
    ->group(function (){
        Route::get('/', 'PropertyController@index')->name('index');    
        Route::post('/register', 'PropertyController@register')->name('register');    
        Route::post('/{propertyId}/update', 'PropertyController@update')->name('update');    
        Route::get('/{propertyId}/delete', 'PropertyController@delete')->name('delete');        
    // property/feature
        Route::name('feature.')
        ->prefix('/feature')
        ->group(function (){
            Route::get('/{propertyId}', 'FeatureController@index')->name('index');    
            Route::post('/register', 'FeatureController@register')->name('register');    
            Route::post('/{featureId}/update', 'FeatureController@update')->name('update');    
            Route::get('/{featureId}/delete', 'FeatureController@delete')->name('delete');        
        });

        Route::name('request.')
        ->prefix('/request')
        ->group(function (){
            Route::get('/', 'RentRequestController@index')->name('index');    
            Route::post('/register', 'RentRequestController@register')->name('register');    
            Route::post('/{requestId}/update', 'RentRequestController@update')->name('update');    
            Route::get('/{requestId}/delete', 'RentRequestController@delete')->name('delete');        
        });
    });

    
    
});