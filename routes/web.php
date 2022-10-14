<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactinformationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HimaragalleryController;
use App\Http\Controllers\HimararestaurantController;
use App\Http\Controllers\HimaraserviceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepagephotovideoController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomserviceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WelcomemsgController;
use App\Models\About;
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

//Welcome message
Route::get('/welcomemsg',[WelcomemsgController::class,'index'])->name('welcomemsg');
Route::get('/createwlcmsg',[WelcomemsgController::class,'index'])->name('createwlcmsg');
Route::post('/storewlcmsg',[WelcomemsgController::class,'store']);
Route::get('/{id}/showwlcmsg',[WelcomemsgController::class,'show'])->name('wlcomemsg');
Route::get('/{id}/editwlcmsg',[WelcomemsgController::class,'edit'])->name('editlcomemsg');
Route::Put('/{id}/updatewlcmsg',[WelcomemsgController::class,'update']);
Route::delete('/{id}/deletewlcemsg',[WelcomemsgController::class,'destroy']);
//End Of Welcome message


//About Info
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/createabout',[AboutController::class,'create'])->name('createabout');
Route::post('/storeabout',[AboutController::class,'store'])->name('storeabout');
Route::get('{id}/showabout',[AboutController::class,'show']);
Route::get('/{id}/editabout',[AboutController::class,'edit'])->name('editabout');
Route::Put('/{id}/updateabout',[AboutController::class,'update'])->name('updateabout');
Route::delete('{id}/deleteabout',[AboutController::class,'destroy'])->name('deleteabout');
//End Of About Info

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


//Himara services
Route::get('/himaraservices',[HimaraserviceController::class,'index'])->name('himaraservices');
Route::get('/createHservice',[HimaraserviceController::class,'create'])->name('createHservice');
Route::post('/storeHservice',[HimaraserviceController::class,'store'])->name('storeHservice');
Route::get('{id}/showHservice',[HimaraserviceController::class,'show']);
Route::get('/{id}/editHservice',[HimaraserviceController::class,'edit'])->name('editHservice');
Route::Put('/{id}/updateHservice',[HimaraserviceController::class,'update'])->name('updateHservice');
Route::delete('{id}/deleteHservice',[HimaraserviceController::class,'destroy'])->name('deleteHservice');
//End Of Himara services

//Himara gallery
Route::get('/himaragallery',[HimaragalleryController::class,'index'])->name('himaragallery');
Route::get('/createHgal',[HimaragalleryController::class,'create'])->name('createHgal');
Route::post('/storeHgal',[HimaragalleryController::class,'store'])->name('storeHgal');
Route::get('{id}/showHgal',[HimaragalleryController::class,'show']);
Route::get('/{id}/editHgal',[HimaragalleryController::class,'edit'])->name('editHgal');
Route::Put('/{id}/updateHgal',[HimaragalleryController::class,'update'])->name('updateHgal');
Route::delete('{id}/deleteHgal',[HimaragalleryController::class,'destroy'])->name('deleteHgal');
//End Of Himara gallery

//Himara homepagephotovideo
Route::get('/himaraPV',[HomepagephotovideoController::class,'index'])->name('himaraPV');
Route::get('/createPV',[HomepagephotovideoController::class,'create'])->name('createPV');
Route::post('/storePV',[HomepagephotovideoController::class,'store'])->name('storePV');
Route::get('{id}/showPV',[HomepagephotovideoController::class,'show']);
Route::get('/{id}/editPV',[HomepagephotovideoController::class,'edit'])->name('editPV');
Route::Put('/{id}/updatePV',[HomepagephotovideoController::class,'update'])->name('updatePV');
Route::delete('{id}/deletePV',[HomepagephotovideoController::class,'destroy'])->name('deletePV');
//End Of Himara homepagephotovideo

//himara restaurent
Route::get('/himarares',[HimararestaurantController::class,'index'])->name('himarares');
Route::get('/createHres',[HimararestaurantController::class,'create'])->name('createHres');
Route::post('/storeHres',[HimararestaurantController::class,'store'])->name('storeHres');
Route::get('{id}/showHres',[HimararestaurantController::class,'show']);
Route::get('/{id}/editHres',[HimararestaurantController::class,'edit'])->name('editHres');
Route::Put('/{id}/updateHres',[HimararestaurantController::class,'update'])->name('updateHres');
Route::delete('{id}/deleteHres',[HimararestaurantController::class,'destroy'])->name('deleteHres');
//End Of himara restaurent



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
