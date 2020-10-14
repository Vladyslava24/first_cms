<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\SortController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/admin', [IndexController::class, 'index'])->name('admin-index')
    ->middleware('auth');

Route::post('/admin/save', [IndexController::class, 'insert'])->name('admin-save')
    ->middleware('auth');


Route::get('/admin/{id}/update',
    [IndexController::class, 'updateNote']
)->name('note-update');

Route::post('/admin/{id}/update',
    [IndexController::class, 'updateNoteSubmit']
)->name('note-update-submit');


Route::get('/admin/{id}/delete', [IndexController::class, 'deleteNote']
)->name('note-delete');

Route::get('/view', [IndexController::class, 'viewPage'])
    ->name('view-page');


//Routes for sites
Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/', [PageController::class, 'mainPage'])
    ->name('main');

Route::get('/accessories', [PageController::class, 'accessoriesCategory'])
    ->name('accessories');

Route::get('/jacket', [PageController::class, 'jacketCategory'])
    ->name('jacket');

Route::get('/top', [PageController::class, 'topCategory'])
    ->name('top');

Route::get('/bottom', [PageController::class, 'bottomCategory'])
    ->name('bottom');

Route::get('/about', [PageController::class, 'aboutPage'])
    ->name('about');

Route::get('/sweatshirt', [PageController::class, 'sweatshirtPage'])
    ->name('sweatshirt');

Route::get('/sweatshirt-default', [SortController::class, 'sortByDefault'])
    ->name('default');

Route::get('/sweatshirt-reverse', [SortController::class, 'sortInReverseOrder'])
    ->name('reverse');

Route::get('/sweatshirt-created_at', [SortController::class, 'sortByCreatedAt'])
    ->name('created_at');

Route::get('/sweatshirt-updated_at', [SortController::class, 'sortByUpdatedAt'])
    ->name('updated_at');
