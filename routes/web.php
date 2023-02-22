<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Home
Route::get('/', [HomeController::class, 'beranda']);

// Products
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEdu'] );
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'marbelFriends'] );
    Route::get('/riri-story-books', [ProductController::class, 'ririStory'] );
    Route::get('/kolak-kids-song', [ProductController::class, 'kolakKids'] );
});

// News
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{tampil}', [NewsController::class, 'tampil']);

// Program
Route::prefix('/Program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan', [ProgramController::class, 'kunjungan']);
});

// About Us
Route::get('/about-us', [AboutController::class, 'aboutUs']);

// Contact Us
Route::resource('/contact-us', ContactController::class);