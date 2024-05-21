<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Livewire\LoginForm;
use App\Livewire\RegisterForm;
use App\Livewire\VerifyForm;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
Route::middleware('auth')->group(function(){
    Route::get('/verify', VerifyForm::class)->name('verification.notice');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('login')->with('message','Berhasil keluar');
    })->name('logout');
    Route::post('/email/verification-notification', function ($request) {
        $request->user()->sendEmailVerificationNotification();
     
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
    
    Route::middleware('verified')->group(function(){
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });
});
Route::middleware(['auth', 'signed'])->group(function(){
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/dashboard')->with('message','Terima kasih, akun anda telah terverfikasi');
    })->name('verification.verify'); 
});

Route::get('lara-logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
