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
use App\Http\Controllers\LatestnewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomserviceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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


//USER
Route::get('/users',[UserController::class,'index'])->middleware(['auth','rolemoderator'])->name('users');
// Route::get('/allHtitles',[HomeController::class,'allHtitles'])->name('allHtitles');
Route::get('/createuser',[UserController::class,'create'])->name('createuser');
Route::post('/storeuser',[UserController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/showuser',[UserController::class,'show'])->middleware(['auth', 'roleadmin'])->name('showuser');
Route::get('/{id}/edituser',[UserController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('edituser');
Route::Put('/{id}/updateuser',[UserController::class,'update'])->middleware(['auth', 'roleadmin']);
Route::delete('/{id}/deleteuser',[UserController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of USER


//HOME
Route::get('/homepage',[HomeController::class,'index'])->name('homepage');
Route::get('/allHtitles',[HomeController::class,'allHtitles'])->name('allHtitles');
Route::get('/createHtitles',[HomeController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createHtitles');
Route::post('/storeHtitles',[HomeController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/showHtitles',[HomeController::class,'show'])->middleware(['auth', 'roleadmin'])->name('wlcHtitles');
Route::get('/{id}/editHtitles',[HomeController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editHtitles');
Route::Put('/{id}/updateHtitles',[HomeController::class,'update'])->middleware(['auth', 'roleadmin']);
Route::delete('/{id}/deleteHtitles',[HomeController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of HOME

//Welcome message
Route::get('/welcomemsg',[WelcomemsgController::class,'index'])->name('welcomemsg');
// Route::get('/createwlcmsg',[WelcomemsgController::class,'create'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin'])->name('createwlcmsg');
Route::post('/storewlcmsg',[WelcomemsgController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/showwlcmsg',[WelcomemsgController::class,'show'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin'])->name('wlcomemsg');
Route::get('/{id}/editwlcmsg',[WelcomemsgController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editlcomemsg');
Route::Put('/{id}/updatewlcmsg',[WelcomemsgController::class,'update'])->middleware(['auth', 'roleadmin']);
Route::delete('/{id}/deletewlcemsg',[WelcomemsgController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of Welcome message


//About Info
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/createabout',[AboutController::class,'create'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin'])->name('createabout');
Route::post('/storeabout',[AboutController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeabout');
Route::get('{id}/showabout',[AboutController::class,'show'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editabout',[AboutController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editabout');
Route::Put('/{id}/updateabout',[AboutController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateabout');
Route::delete('{id}/deleteabout',[AboutController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteabout');
//End Of About Info

//ROOM
Route::get('/rooms',[RoomController::class,'index'])->name('rooms');
Route::get('/allrooms',[RoomController::class,'allrooms'])->name('allrooms');
Route::get('/{id}/showroomz',[RoomController::class,'showroom']);
// roomstovalide
Route::get('/roomsnotvalide',[RoomController::class,'roomsnotvalide'])->name('roomsnotvalide');
Route::PUT('/{id}/valideroomz',[RoomController::class,'roomstovalide']);

Route::get('/{id}/editroomz',[RoomController::class,'edit'])->middleware(['auth', 'roleeditor']);
Route::Put('/{id}/updateroomz',[RoomController::class,'update'])->middleware(['auth', 'roleeditor']);
Route::delete('/{id}/deleteroomz',[RoomController::class,'destroy'])->middleware(['auth', 'roleeditor']);
// Route::get('/single',[RoomController::class,'single'])->name('single');
// Route::get('/double',[RoomController::class,'double'])->name('double');
// Route::get('/delux',[RoomController::class,'delux'])->name('delux');
// Route::get('/family',[RoomController::class,'family'])->name('family');
Route::get('/{id}/showroom',[RoomController::class,'show']);
Route::get('/createroom',[RoomController::class,'create'])->middleware(['auth', 'roleeditor'])->name('createroom');
Route::post('/storeroom',[RoomController::class,'store'])->middleware(['auth', 'roleeditor']);

// Route::put('/{id}/updateroom',[RoomController::class,'updated']);
// Route::delete('/{id}/deleteroom',[RoomController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of ROOM

// SEARCH
// not used cause it is used above in index room
// Route::get('/search',[RoomController::class,'search']);
//END OF SEARCH

// CATEGORY && TAG //not working
Route::get('room/catagors/{catagor}',[RoomController::class,'catagor'])->name("room.catagor");
Route::get('/searchCat',[RoomController::class,'showcatagor']);
Route::get('/searchTag',[RoomController::class,'showtag']);
// Route::get('room/tags/{tag}',[RoomController::class,'tag'])->name("room.tag");
// END OF CATEGORY && TAG

// CATEGOR && TAG
//
// END OF CATEGOR && TAG


//ROOMSERVICE
Route::get('/roomservices',[RoomserviceController::class,'index'])->name('roomservice');
Route::get('/createroomservices',[RoomserviceController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createroomservices');
Route::post('/storeroomservice',[RoomserviceController::class,'store'])->middleware(['auth', 'roleadmin']);
// End of ROOMSERVICE


//Himara services
Route::get('/himaraservices',[HimaraserviceController::class,'index'])->name('himaraservices');
Route::get('/createHservice',[HimaraserviceController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createHservice');
Route::post('/storeHservice',[HimaraserviceController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeHservice');
Route::get('{id}/showHservice',[HimaraserviceController::class,'show'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editHservice',[HimaraserviceController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editHservice');
Route::Put('/{id}/updateHservice',[HimaraserviceController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateHservice');
Route::delete('{id}/deleteHservice',[HimaraserviceController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteHservice');
//End Of Himara services

//Himara gallery
Route::get('/himaragallery',[HimaragalleryController::class,'index'])->name('himaragallery');
Route::get('/createHgal',[HimaragalleryController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createHgal');
Route::post('/storeHgal',[HimaragalleryController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeHgal');
Route::get('{id}/showHgal',[HimaragalleryController::class,'show'])->middleware(['auth', 'roleadmin'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editHgal',[HimaragalleryController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editHgal');
Route::Put('/{id}/updateHgal',[HimaragalleryController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateHgal');
Route::delete('{id}/deleteHgal',[HimaragalleryController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteHgal');
//End Of Himara gallery

//Himara homepagephotovideo
Route::get('/himaraPV',[HomepagephotovideoController::class,'index'])->name('himaraPV');
Route::get('/createPV',[HomepagephotovideoController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createPV');
Route::post('/storePV',[HomepagephotovideoController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storePV');
Route::get('{id}/showPV',[HomepagephotovideoController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editPV',[HomepagephotovideoController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editPV');
Route::Put('/{id}/updatePV',[HomepagephotovideoController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updatePV');
Route::delete('{id}/deletePV',[HomepagephotovideoController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deletePV');
//End Of Himara homepagephotovideo

//himara restaurent
Route::get('/himarares',[HimararestaurantController::class,'index'])->name('himarares');
Route::get('/createHres',[HimararestaurantController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createHres');
Route::post('/storeHres',[HimararestaurantController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeHres');
Route::get('{id}/showHres',[HimararestaurantController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editHres',[HimararestaurantController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editHres');
Route::Put('/{id}/updateHres',[HimararestaurantController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateHres');
Route::delete('{id}/deleteHres',[HimararestaurantController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteHres');
//End Of himara restaurent


//Latest News
Route::get('/latestnews',[LatestnewController::class,'index'])->name('latestnews');
Route::get('/createLnews',[LatestnewController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createLnews');
Route::post('/storeLnews',[LatestnewController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeLnews');
Route::get('{id}/showLnews',[LatestnewController::class,'show']);
Route::get('/{id}/editLnews',[LatestnewController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editLnews');
Route::Put('/{id}/updateLnews',[LatestnewController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateLnews');
Route::delete('{id}/deleteLnews',[LatestnewController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteLnews');
//End Of Latest News


//TEAM
Route::get('/teams',[TeamController::class,'index'])->name('teams');
Route::get('/allmembers',[TeamController::class,'allmembers'])->name('allmembers');
Route::get('/createmember',[TeamController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createmember');
Route::post('/storemember',[TeamController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('{id}/showmember',[TeamController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editmember',[TeamController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editmember');
Route::Put('/{id}/updatemember',[TeamController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updatemember');
Route::delete('{id}/deletemember',[TeamController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deletemember');

// à revoir le samed-07-10-2022
// Route::get('/{id}/editmember',[TeamController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editmember');
// Route::put('{id}/updatemember',[TeamController::class,'update'])->middleware(['auth', 'roleadmin']);
// Route::delete('{id}/deletemember',[TeamController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of TEAM

//GALLERY
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/allimg',[GalleryController::class,'allimg'])->name('allimg');
Route::get('/createimg',[GalleryController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createimg');
Route::post('/storeimg',[GalleryController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeimg');
Route::get('{id}/showimg',[GalleryController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editimg',[GalleryController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editimg');
Route::Put('/{id}/updateimg',[GalleryController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateimg');
Route::delete('{id}/deleteimg',[GalleryController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteimg');
//End Of GALLERY

//slider
Route::get('/slider',[SliderController::class,'index'])->name('slider');
Route::get('/createslider',[SliderController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createslider');
Route::post('/storeslider',[SliderController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storeslider');
Route::get('{id}/showslider',[SliderController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editslider',[SliderController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editslider');
Route::Put('/{id}/updateslider',[SliderController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updateslider');
Route::delete('{id}/deleteslider',[SliderController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deleteslider');
//End Of slider

//CATEGORY
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/createcat',[CategoryController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createcat');
Route::post('/storecat',[CategoryController::class,'store'])->middleware(['auth', 'roleadmin'])->name('storecat');
Route::get('{id}/showcat',[CategoryController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/{id}/editcat',[CategoryController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editcat');
Route::Put('/{id}/updatecat',[CategoryController::class,'update'])->middleware(['auth', 'roleadmin'])->name('updatecat');
Route::delete('{id}/deletecat',[CategoryController::class,'destroy'])->middleware(['auth', 'roleadmin'])->name('deletecat');
//End Of CATEGORY


//CONTACT
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/messagerecieved',[ContactController::class,'messages'])->name('messagerecieved');
Route::get('/createcontact',[ContactController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createcontact');
Route::post('/storecontact',[ContactController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('{id}/showmsg',[ContactController::class,'show'])->middleware(['auth', 'roleadmin']);
Route::get('/editcontact',[ContactController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editcontact');
Route::put('{id}/updatecontact',[ContactController::class,'update'])->middleware(['auth', 'roleadmin']);
Route::delete('{id}/deletemsg',[ContactController::class,'destroy'])->middleware(['auth', 'roleadmin']);
//End Of CONTACT

//CONTACTINFORMATION
Route::get('/contactinformation',[ContactinformationController::class,'index'])->name('contactinformation'); //not used here it is used in contactcontroller
Route::get('/createcontactinformation',[ContactinformationController::class,'create'])->middleware(['auth', 'roleadmin'])->name('createcontactinformation');
Route::post('/storecontactinformation',[ContactinformationController::class,'store'])->middleware(['auth', 'roleadmin']);
Route::get('/editcontactinformation',[ContactinformationController::class,'edit'])->middleware(['auth', 'roleadmin'])->name('editcontactinformation');
Route::put('{id}/updatecontactinformation',[ContactinformationController::class,'update'])->middleware(['auth', 'roleadmin']);
Route::delete('{id}/deletecontactinformation',[ContactinformationController::class,'edit'])->middleware(['auth', 'roleadmin']);
//End Of CONTACTINFORMATION

//BOOKING middleware pour user à voir pour ses accèes au modification
Route::get('/bookings',[BookingController::class,'index'])->middleware(['auth','rolemember'])->name('bookings');
Route::get('/createbookings',[BookingController::class,'create'])->name('createbookings');
Route::post('/storebooking',[BookingController::class,'store']);
Route::get('/{id}/showbookings',[BookingController::class,'show'])->middleware('auth','rolemember')->name('showbookings');
Route::get('/{id}/editbookings',[BookingController::class,'edit'])->middleware('auth')->name('editbookings');
Route::put('/{id}/updatebookings',[BookingController::class,'update'])->middleware('auth')->name('updatebookings');
Route::delete('/{id}/deletebookings',[BookingController::class,'destroy'])->middleware('auth');
//End Of BOOKING


//ROOMVIEW
Route::get('/roomreview',[RoomController::class,'roomreview'])->middleware('auth')->name('roomreview');
Route::put('/{room}/updatestars',[RoomController::class,'updatestars'])->middleware('auth');


//END OF ROOMREVIEW
