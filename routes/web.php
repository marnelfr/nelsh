<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\RedirectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

//Route::get('/', function () {
//    return redirect('https://marnel.me');
//});

//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware('web')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


Route::any('/{slug}', [RedirectController::class, 'index'])
    ->where('slug', '^(?i:[gloxweim]).*') // l-linkedin, x, w-wesg-github
;

Route::resource('link', LinkController::class)->names([
    'store' => 'links.store'
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
