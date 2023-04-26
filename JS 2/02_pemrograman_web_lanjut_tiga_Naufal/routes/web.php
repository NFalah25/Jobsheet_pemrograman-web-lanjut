<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return ('Menampilkan halaman home');
});

Route::prefix('category')->group(function(){
    Route::get('/marble-edu-games', function(){
        return "Menampilkan halaman Marbel Edu Games";
    });
    Route::get('/marble-and-friends-kids-games', function(){
        return "Menampilkan halaman Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function(){
        return "Menampilkan halaman Riri Story Books";
    });
    Route::get('/marble-edu-games', function(){
        return "Menampilkan halaman Kolak Kids Songs";
    });
});

Route::get('/news/{title?}', function ($title = null){
    return $title;
});

Route::prefix('/program')->group (function(){
    Route::get('/karir', function(){
        return "Menampilkan halaman program karir";
    });
    Route::get('/magang', function(){
        return "Menampilkan halaman program magang";
    });
    Route::get('/kunjungan-industri', function(){
        return "Menampilkan halaman kunjungan industri";
    });
});

Route::get('/about', function(){
    return ("Menampilkan halaman About Us");
});

Route::resource('contact', PageController::class)->only([
    'index'
]);
