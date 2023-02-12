<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdmin\DashboardController;



Route::group(['as'=>'superadmin.','prefix' =>'super-admin', 'middleware' => ['auth', 'superadmin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

