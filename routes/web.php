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

Route::get('/', function () {
    return view('mainpage.home');
});
Route::get('/fitness', function () {
    return view('categories.fitness');
});

Route::get('/lifestyle', function () {                   
    return view('categories.lifestyle');
});
Route::get('/installation', function () {
    return view('categories.installation');
});
Route::get('/event', function () {
    return view('categories.event');
});
Route::get('/security', function () {
    return view('categories.security');
});
Route::get('/repair', function () {
    return view('categories.repair');
});
Route::get('/furniture', function () {
    return view('categories.furniture');
});
Route::get('/crafts', function () {
    return view('categories.crafts');
});
Route::get('/corporate', function () {
    return view('categories.corporate');
});
Route::get('/education', function () {
    return view('categories.education');
});
Route::get('/tech', function () {
    return view('categories.tech');
});

Route::get('/distribution', function () {
    return view('categories.distribution');
});
Route::get('/mkting&sales', function () {
    return view('categories.mkting&sales');
});
Route::get('/manufacturing', function () {
    return view('categories.manufacturing');
});
Route::get('/law&safety', function () {
    return view('categories.law&safety');
});
Route::get('/hospitality', function () {
    return view('categories.hospitality');
});

Route::get('/financials', function () {
    return view('categories.financials');
});
Route::get('/business', function () {
    return view('categories.business');
});
Route::get('/construction', function () {
    return view('categories.construction');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/testimonial', function () {
    return view('mainpage.testimonial');
});
Route::get('/team', function () {
    return view('mainpage.team');
});
Route::get('/about', function () {
    return view('mainpage.about');
});
Route::get('/faq', function () {
    return view('mainpage.faq');
});
Route::get('/contact', function () {
    return view('mainpage.contact');
});
Route::get('/howItWorks', function () {
    return view('mainpage.howItWorks');
});
Route::get('/ven1', function () {
    return view('vendorProfile.ven1');
});
Route::get('/chat', function () {
    return view('mainpage.chat');
});
Route::get('/vendor1', function () {
    return view('profile.vendor1');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
