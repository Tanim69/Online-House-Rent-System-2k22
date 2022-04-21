<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HouseController;
use App\http\Controllers\Admin\ReportController;
use App\http\Controllers\Admin\TenantController;

// use App\http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\BookingController;
use App\http\Controllers\Frontend\HouseinfoController;
use App\http\Controllers\Frontend\PaymentController;
use App\http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;

use App\Http\Controllers\frontend\DetailsController;

// App\Http\Controllers\house;

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
//websit / frontend route


Route::get('/',[HomeController::class,'website'])->name('website');
Route::get('/registration/form',[UserController::class,'RegistrationForm'])->name('registration.form');
Route::post('/registration/create',[UserController::class,'Register'])->name('register');

Route::get('/login',[UserController::class,'loginform'])->name('login.form');
Route::post('/dologin',[UserController::class,'dologin'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

//booking

Route::group(['middleware'=>'auth'],function(){
    Route::get('/show/house/{id}',[BookingController::class,'showhouse'])->name('show.house');
    Route::post('/booking',[BookingController::class,'booking'])->name('house.booking');
});


//houseinfo route
Route::group(['middleware'=>'auth'],function(){
Route::get('/houseinfo/list', [HouseinfoController::class,'list'])->name('houseinfo.list');
Route::get('/houseinfo/create', [HouseinfoController::class,'createinfo'])->name('houseinfo.create');
Route::post('/houseinfo/store',[HouseinfoController::class,'store'])->name('houseinfo.store');
Route::post('/houseinfo/search', [HouseinfoController::class,'search'])->name('houseinfo.search');

});

// details
Route::get('/details/house/{id}', [DetailsController::class,'detailshouse'])->name('details.house');


//payment
Route::group(['middleware'=>'auth'],function(){
Route::get('/payment/house/{id}',[PaymentController::class,'paymenthouse'])->name('payment.house');
Route::post('/payment',[PaymentController::class,'payment'])->name('payment.info');
});








// //Houseowner routes

// Route::get('/house',[HouseController::class,'list'])->name('house');
// Route::post('/house/create',[HouseController::class,'create'])->name('house.create');

// //Tenant routes
// Route::get('/tenant', [TenantController::class,'list'])->name('tenant');
// Route::post('/tenant/create', [TenantController::class,'create'])->name('tenant.create');


//adminroute backend


Route::group(['prefix'=>'admin'],function() {


    Route::get('/', function() {
               return view('backend.layouts.dashboard');
    });


//admin login route
Route::get('/',[HomeController::class,'website'])->name('website');
Route::get('login',[AdminUserController::class,'loginForm'])->name('admin.login');
Route::post('dologin',[AdminUserController::class,'dologin'])->name('admin.dologin');


Route::group(['middleware'=>'admin-auth'],function(){





Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');


Route::get('logout',[AdminUserController::class,'logoutForm'])->name('admin.logout');





//booking routes
Route::get('/show/booking',[AdminBookingController::class,'showbooking'])->name('show.booking');
Route::get('/booking/{id}/{status}',[AdminBookingController::class,'status'])->name('booking.status');



//payemnt route
Route::get('/paymentlist', [AdminPaymentController::class,'paymentlist'])->name('payment.list');


//report route
Route::get('/report', [ReportController::class,'report'])->name('report');

//house route
Route::get('/house',[HouseController::class,'list'])->name('house');
Route::post('/house/create',[HouseController::class,'create'])->name('house.create');

//Tenant routes
Route::get('/tenant', [TenantController::class,'list'])->name('tenant');
Route::post('/tenant/create', [TenantController::class,'create'])->name('tenant.create');



});



});

//delete add house
Route::get('/tenant/delete{id}',[TenantController::class,'delete'])->name('tenant.delete');
Route::get('/houseinfo/delete{id}',[HouseinfoController::class,'delete'])->name('houseinfo.delete');

Route::get('/houseowner/delete{id}',[HouseController::class,'delete'])->name('houseowner.delete');
