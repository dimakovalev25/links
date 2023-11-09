<?php

use App\Http\Controllers\Link\DeleteController as LinkDeleteController;
use App\Http\Controllers\Link\EditController as LinkEditController;
use App\Http\Controllers\Link\IndexController as LinkIndexController;
use App\Http\Controllers\Link\ShowController as LinkShowController;
use App\Http\Controllers\Link\StoreController as LinkStoreController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Link', 'prefix' => 'link'], function (){
    Route::post('/', LinkStoreController::class)->name('link.create');;
    Route::get('/', LinkIndexController::class)->name('links');
    Route::get('/{link}', LinkShowController::class);
    Route::patch('/{link}', LinkEditController::class);
    Route::delete('/{link}', LinkDeleteController::class);
});

