<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Agent\DashboardController;

Route::group(['as'=>'agent.','prefix' =>'agent', 'middleware' => ['auth', 'agent']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

