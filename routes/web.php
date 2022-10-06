<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactinformationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomserviceController;
use App\Http\Controllers\TeamController;
use App\Models\Roomservice;
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
Route::get('/showroom',[RoomController::class,'show'])->name('showroom');
Route::get('/createroom',[RoomController::class,'create'])->name('createroom');
Route::post('/storeroom',[RoomController::class,'store']);
//End Of ROOM

//ROOMSERVICE
Route::get('/roomservices',[RoomserviceController::class,'index'])->name('roomservice');
Route::get('/createroomservices',[RoomserviceController::class,'create'])->name('createroomservices');
Route::post('/storeroomservice',[RoomserviceController::class,'store']);
// End of ROOMSERVICE

//TEAM
Route::get('/teams',[TeamController::class,'index'])->name('teams');
//End Of TEAM

//GALLERY
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
//End Of GALLERY

//CONTACT
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/messagerecieved',[ContactController::class,'messages'])->name('messagerecieved');
Route::get('/createcontact',[ContactController::class,'create'])->name('createcontact');
Route::post('/storecontact',[ContactController::class,'store']);
Route::get('{id}/showmsg',[ContactController::class,'show']);
Route::get('/editcontact',[ContactController::class,'edit'])->name('editcontact');
Route::put('{id}/updatecontact',[ContactController::class,'update']);
Route::delete('{id}/deletemsg',[ContactController::class,'destroy']);
//End Of CONTACT

//CONTACTINFORMATION
Route::get('/contactinformation',[ContactinformationController::class,'index'])->name('contactinformation'); //not used here it is used in contactcontroller
Route::get('/createcontactinformation',[ContactinformationController::class,'create'])->name('createcontactinformation');
Route::post('/storecontactinformation',[ContactinformationController::class,'store']);
Route::get('/editcontactinformation',[ContactinformationController::class,'edit'])->name('editcontactinformation');
Route::put('{id}/updatecontactinformation',[ContactinformationController::class,'update']);
Route::delete('{id}/deletecontactinformation',[ContactinformationController::class,'edit']);
//End Of CONTACTINFORMATION

//BOOKING
Route::get('/booking',[BookingController::class,'create'])->name('booking');
Route::post('/storebooking',[BookingController::class,'store']);
//End Of BOOKING
