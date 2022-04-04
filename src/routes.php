<?php

use Illuminate\Support\Facades\Route;

Route::prefix('vod')->name('vod.')->group(function () {
    Route::get('test', function () {
        return 'Hello world';
    })->name('test');
});
