<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;

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
    return view('startseite');
});

Route::get('/about', function(){
    return view('about');
});

Route::resource('comment', CommentController::class);
Route::get('/comment/del/{comment}', [CommentController::class, 'showDelete']);

Route::resource('user', UserController::class);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/{sorte}', [MenuController::class, 'showMenu'])->name('menu.show');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/impressum', function(){
    return view('impressum');
});

Route::get('/datenschutz', function(){
    return view('datenschutz');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
