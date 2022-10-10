<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
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
Route::get('/allmembers',[TeamController::class,'allmembers'])->name('allmembers');
Route::get('/createmember',[TeamController::class,'create'])->name('createmember');
Route::post('/storemember',[TeamController::class,'store']);
Route::get('{id}/showmember',[TeamController::class,'show']);
Route::get('/{id}/editmember',[TeamController::class,'edit'])->name('editmember');
Route::Put('/{id}/updatemember',[TeamController::class,'update'])->name('updatemember');
Route::delete('{id}/deletemember',[TeamController::class,'destroy'])->name('deletemember');

// à revoir le samed-07-10-2022
// Route::get('/{id}/editmember',[TeamController::class,'edit'])->name('editmember');
// Route::put('{id}/updatemember',[TeamController::class,'update']);
// Route::delete('{id}/deletemember',[TeamController::class,'destroy']);
//End Of TEAM

//GALLERY
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/allimg',[GalleryController::class,'allimg'])->name('allimg');
Route::get('/createimg',[GalleryController::class,'create'])->name('createimg');
Route::post('/storeimg',[GalleryController::class,'store'])->name('storeimg');
Route::get('{id}/showimg',[GalleryController::class,'show']);
Route::get('/{id}/editimg',[GalleryController::class,'edit'])->name('editimg');
Route::Put('/{id}/updateimg',[GalleryController::class,'update'])->name('updateimg');
Route::delete('{id}/deleteimg',[GalleryController::class,'destroy'])->name('deleteimg');
//End Of GALLERY

//CATEGORY
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/createcat',[CategoryController::class,'create'])->name('createcat');
Route::post('/storecat',[CategoryController::class,'store'])->name('storecat');
Route::get('{id}/showcat',[CategoryController::class,'show']);
Route::get('/{id}/editcat',[CategoryController::class,'edit'])->name('editcat');
Route::Put('/{id}/updatecat',[CategoryController::class,'update'])->name('updatecat');
Route::delete('{id}/deletecat',[CategoryController::class,'destroy'])->name('deletecat');
//End Of CATEGORY


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
