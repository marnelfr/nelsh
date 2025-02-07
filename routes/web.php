<?php

use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return redirect('https://marnel.me');
//});

Route::get('/', [HomeController::class, 'index']);


Route::any('/{slug}', [RedirectController::class, 'index'])
    ->where('slug', '^(?i:[rseivm]).*')
;
