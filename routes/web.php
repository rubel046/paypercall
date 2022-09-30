<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');

Route::group(['prefix' => 'services'], function (){
    Route::get('laundry', [App\Http\Controllers\HomeController::class, 'laundryService'])->name('services.Laundry');
    Route::get('kitchen', [App\Http\Controllers\HomeController::class, 'kitchenService'])->name('services.Kitchen');
    Route::get('commercial', [App\Http\Controllers\HomeController::class, 'commercialService'])->name('services.Commercial');
    Route::get('multi', [App\Http\Controllers\HomeController::class, 'multiService'])->name('services.Multi');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::put('/phone', [App\Http\Controllers\DashboardController::class, 'updatePhoneNo'])->name('phoneNo.update');
