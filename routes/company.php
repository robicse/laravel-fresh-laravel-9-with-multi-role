<?php
use Illuminate\Support\Facades\Route;


Route::group(['as'=>'company.','prefix' =>'company', 'middleware' => ['auth', 'company']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

