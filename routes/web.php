<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointment');
Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');
Route::get('/services/{user_type?}',[App\Http\Controllers\ServicesController::class, 'index'])->name('services.index');



Route::middleware(['auth'])->group(function () {
    // Protected routes 
    Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
});
