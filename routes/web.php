<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsServiceCenter;
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
    return view('home');
});

Route::get('/service-center/registration', function () {
    return view('auth.service_center_register');
})->name('service-center.register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('user/home', [App\Http\Controllers\HomeController::class, 'UserHome'])->name('user.home')->middleware('IsUser');

// service center routes
Route::get('service-center/home/{service_center}', 'App\Http\Controllers\ServiceCenterFrontendController@service_center_home')->name('service-center.home')->middleware('IsServiceCenter');

Route::get('service-center/bookings/{service_center}', 'App\Http\Controllers\ServiceCenterFrontendController@service_center_bookings')->name('service-center.bookings')->middleware('IsServiceCenter');

Route::get('service-center/info_form', 'App\Http\Controllers\ServiceCenterFrontendController@service_center_info_form')->name('service-center.info_form')->middleware('IsServiceCenter');

// service center backend routes
Route::post('service-center/info_form/create','App\Http\Controllers\ServiceCenterController@create')->name('service-center.create');

Route::patch('service-center/update_info/{service_center}','App\Http\Controllers\ServiceCenterController@update')->name('service-center.update');

//
//

// Admin routes
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'AdminHome'])->name('admin.home')->middleware('IsAdmin');

// User Frontend Routes

Route::match(['get','post'],'customer/home/{customer}/{search?}','App\Http\Controllers\CustomerFrontendController@user_home')->name('user.home')->middleware('IsUser');

Route::get('customer/profile/{customer}','App\Http\Controllers\CustomerFrontendController@user_profile')->name('user.profile')->middleware('IsUser');

Route::get('customer/service-center-profile/{customer}/{service_center}','App\Http\Controllers\CustomerFrontendController@service_center_profile')->name('user.service_center_profile')->middleware('IsUser');

Route::get('customer/info-form','App\Http\Controllers\CustomerFrontendController@user_info_form')->name('user.info_form')->middleware('IsUser');

// User backend routes

Route::post('customer/info_form/create','App\Http\Controllers\CustomerController@create')->name('customer.create');

Route::patch('customer/update/{customer}','App\Http\Controllers\CustomerController@update')->name('customer.update');


// Booking route

Route::post('customer/make/booking/{customer}/{service_center}','App\Http\Controllers\BookingController@create')->name('booking.create');

Route::patch('service_center/accept/booking/{booking}','App\Http\Controllers\BookingController@accept_booking')->name('booking.accept');

Route::patch('service_center/decline/booking/{booking}','App\Http\Controllers\BookingController@decline_booking')->name('booking.decline');

// review route

Route::post('customer/make/review/{customer}/{service_center}','App\Http\Controllers\ReviewController@create')->name('review.create');
