<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;

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

//Home
Route::get('/', [HomeController::class, 'index']);

//Product
Route::prefix('products')->group(function (){
    Route::get('/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/riri-story-books-animations', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    });
    Route::get('/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//News
Route::get('/news', function() {
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

//Program
Route::prefix('program')->group(function (){
    Route::get('karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('magang', function(){
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('kunjungan-industri', function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

//About Us
Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});

//Contact Us
Route::get('/contact-us', [ContactUsController::class, 'contactUs']);
