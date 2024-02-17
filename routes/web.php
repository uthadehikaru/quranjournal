<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Livewire\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');
Route::resource('posts', PostController::class)->only(['index','show']);
Route::resource('events', EventController::class)->only(['index','show']);
Route::resource('products', ProductController::class)->only(['index','show']);
Route::get('/login', LoginForm::class)->name('login');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
});
