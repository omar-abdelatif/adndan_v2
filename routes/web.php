<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CasesController;

Auth::routes();

Route::view('/', 'auth.login');
Route::prefix('admin/dashboard')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('main', 'index')->name('home');
        });
        Route::prefix('user')->group(function () {
            Route::controller(UserController::class)->group(function () {
                Route::get('profile', 'index')->name('user.profile');
                Route::post('update_profile', 'update')->name('user.update');
                Route::get('all', 'AllUsers')->name('user.index');
                Route::post('store', 'store')->name('user.store');
                Route::get('delete/{id}', 'destroy')->name('user.delete');
                Route::post('update', 'updateUser')->name('newuser.update');
            });
        });
        Route::prefix('cases')->group(function(){
            Route::controller(CasesController::class)->group(function(){
                Route::get('all', 'index')->name('cases.index');
                Route::post('store', 'store')->name('cases.store');
            });
        });
    });
});

