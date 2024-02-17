<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Livewire\LoginForm;
use App\Livewire\RegisterForm;
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
Route::view('/about', 'about')->name('about');
Route::resource('artikel', PostController::class)->only(['index','show']);
Route::resource('acara', EventController::class)->only(['index','show']);
Route::resource('produk', ProductController::class)->only(['index','show']);
Route::get('/login', LoginForm::class)->name('login');
Route::get('/register', RegisterForm::class)->name('register');
Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login')->with('message','Berhasil keluar');
})->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
});
