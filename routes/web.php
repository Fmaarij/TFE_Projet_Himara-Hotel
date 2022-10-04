<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//HOME
Route::get('/homepage',[HomeController::class,'index'])->name('homepage');
//End Of HOME

//ROOM
Route::get('/rooms',[RoomController::class,'index'])->name('rooms');
//End Of ROOM

//TEAM
Route::get('/teams',[TeamController::class,'index'])->name('teams');
//End Of TEAM

//GALLERY
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
//End Of GALLERY

//CONTACT
Route::get('/contact',[ContactController::class,'index'])->name('contact');
//End Of CONTACT

//BOOKING
Route::get('/booking',[BookingController::class,'create'])->name('booking');
Route::post('/storebooking',[BookingController::class,'store']);
//End Of BOOKING
