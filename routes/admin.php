<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\RoleController;
use App\Http\Controllers\Admin\DashboardController;

Route::group([
  'as' => 'admin.',
  'prefix' => 'admin',
  'middleware' => ['auth', 'admin']
], function () {
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::resource('roles', RoleController::class);
  Route::resource('users', UserController::class);
  Route::resource('business-settings', UserController::class);
});
