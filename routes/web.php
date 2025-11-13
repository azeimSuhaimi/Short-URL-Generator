<?php

use App\Http\Controllers\shorturl;
use Illuminate\Support\Facades\Route;

Route::controller(shorturl::class)->group(function () {

    Route::get('/','index');
    Route::get('/generator','generators')->name('index.generators');
    Route::get('/{code}','link');


});//end group
