<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::prefix('pertemuan1')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{id}', [BlogController::class, 'detail']);
});
