<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

Route::resource('pesanans', PesananController::class);

Route::get('home', [FrontendController::class, 'home'])->name('home');

Route::get('about', [FrontendController::class, 'about'])->name('about');

Route::get('saran', [FrontendController::class, 'saran'])->name('saran');

Route::get('menu', [FrontendController::class, 'menu'])->name('menu');

Route::get('validation', [FrontendController::class, 'validation'])->name('validation');

Route::get('create', [FrontendController::class, 'create'])->name('create');

Route::get('index', [FrontendController::class, 'index'])->name('index');

Route::post('/', function (App\Http\Requests\PostRequest $request) {
    return back()->with('success', 'Data Added Successfully.');
});

Route::resource('posts', PostController::class);