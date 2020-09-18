<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'mainPage'])->name('main');
/*Route::get('/', function () {
    return view('main');
})->name('main');*/

Route::get('/about', [PageController::class, 'aboutPage'])->name('about');

Route::get('/sweatshirt', [PageController::class, 'sweatshirtPage'])->name('sweatshirt');

//Route::post('/sweatshirt', [PageController::class, 'sweatshirtPage'])->name('sweatshirt');
//Route::get('/sweatshirt', 'PageController@sweatshirtPage')->name('sweatshirt');
