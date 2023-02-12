<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

// landing page
Route::get('/', function () {
    return view('frontend/index');
});

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// pages
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});


