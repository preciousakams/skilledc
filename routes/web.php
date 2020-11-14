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

Route::get('/', function () {
    return view('mainpage.home');
});
Route::get('/fitness', function () {
    return view('categories.fitness');
})->middleware('verified');

Route::get('/lifestyle', function () {
    return view('categories.lifestyle');
})->middleware('verified');

Route::get('/installation', function () {
    return view('categories.installation');
})->middleware('verified');

Route::get('/event', function () {
    return view('categories.event');
})->middleware('verified');

Route::get('/security', function () {
    return view('categories.security');
})->middleware('verified');

Route::get('/repair', function () {
    return view('categories.repair');
})->middleware('verified');

Route::get('/furniture', function () {
    return view('categories.furniture');
})->middleware('verified');

Route::get('/crafts', function () {
    return view('categories.crafts');
})->middleware('verified');

// Route::get('/corporate', function () {
//     return view('categories.corporate');
// })->middleware('verified');

Route::get('/education', function () {
    return view('categories.education');
})->middleware('verified');

Route::get('/tech', function () {
    return view('categories.tech');
})->middleware('verified');

Route::get('/distribution', function () {
    return view('categories.distribution');
})->middleware('verified');

Route::get('/mkting', function () {
    return view('categories.mkting');
})->middleware('verified');

Route::get('/manufacturing', function () {
    return view('categories.manufacturing');
})->middleware('verified');

Route::get('/law', function () {
    return view('categories.law');
})->middleware('verified');

Route::get('/hospitality', function () {
    return view('categories.hospitality');
})->middleware('verified');

Route::get('/financials', function () {
    return view('categories.financials');
})->middleware('verified');



Route::get('/construction', function () {
    return view('categories.construction');
})->middleware('verified');

Route::get('/landingPage', function () {
    return view('landingPage');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/testimonial', function () {
    return view('mainpage.testimonial');
})->middleware('verified');

Route::get('/team', function () {
    return view('mainpage.team');
})->middleware('verified');

Route::get('/about', function () {
    return view('mainpage.about');
})->middleware('verified');

Route::get('/faq', function () {
    return view('mainpage.faq');
})->middleware('verified' );
Route::get('/contact', function () {
    return view('mainpage.contact');
});
Route::get('/howItWorks', function () {
    return view('mainpage.howItWorks');
});

Route::get('/loginPage', function () {
    return view('loginPage');
});

// Route::get('/ven1', function () {
//     return view('vendorProfile.ven1');
// });
// Route::get('/chat', function () {
//     return view('mainpage.chat');
// });
// Route::get('/vendor', function () {
//     return view('vendor');
// })->middleware('verified' ) ;

Route::get('/profile', function () {
    return view('user.profile');
})->middleware('verified');

Route::get('/Register', function () {
    return view('landingPage');
});


// Route::get('/trynew', function () {
//     return view('trynew');
// });

Auth::routes(['verify' => true]);

// Route::get('/vendor', 'HomeController@index')->name('vendor');

Route::get('/profile', 'HomeController@index')->name('user.profile');

Route::get('/user/{id}', 'UserController@profile')->name('user.profile');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');

Route::post('/edit/user/', 'UserController@update')->name('user.update');

// //////////////Category Pages//////////////////////////

Route::get('/corporate', 'UserController@corporate')->name('categories.corporate');
Route::get('/business', 'UserController@business')->name('categories.business');
Route::get('/construction', 'UserController@construction')->name('categories.construction');
Route::get('/crafts', 'UserController@crafts')->name('categories.crafts');
Route::get('/distribution', 'UserController@distribution')->name('categories.distribution');
Route::get('/education', 'UserController@education')->name('categories.education');
Route::get('/event', 'UserController@event')->name('categories.event');
Route::get('/financials', 'UserController@financials')->name('categories.financials');
Route::get('/fitness', 'UserController@fitness')->name('categories.fitness');
Route::get('/furniture', 'UserController@furniture')->name('categories.furniture');
Route::get('/hospitality', 'UserController@hospitality')->name('categories.hospitality');
Route::get('/installation', 'UserController@installation')->name('categories.installation');
Route::get('/law', 'UserController@law')->name('categories.law');
Route::get('/lifestyle', 'UserController@lifestyle')->name('categories.lifestyle');
Route::get('/manufacturing', 'UserController@manufacturing')->name('categories.manufacturing');
Route::get('/mkting', 'UserController@mkting')->name('categories.mkting');
Route::get('/repair', 'UserController@repair')->name('categories.repair');
Route::get('/security', 'UserController@security')->name('categories.security');
Route::get('/tech', 'UserController@tech')->name('categories.tech');

// Seeding////////////////////////////////////////////////////////////
// Route::get('/testdata', function() {
//     factory(App\User::class,10)->create();
// });

Route::get('/add-to-cart/{user}', 'CartController@add')->name('cart.add');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.profile');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});


// client routes
Route::prefix('client')->group(function(){
    Route::get('/', 'Users\Client\ClientController@index')->name('client.profile');
    Route::get('/login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
    Route::post('/login', 'Auth\ClientLoginController@login')->name('client.login.submit');
    Route::get('/register', 'Auth\ClientRegisterController@showRegisterForm')->name('client.register');
    Route::post('/register', 'Auth\ClientRegisterController@register')->name('client.register.submit');
});


// Route::get('/admin/{id}', 'Users\Admin\AdminController@profile')->name('admin.profile');

Route::get('/edit/admin/', 'Users\Admin\AdminController@edit')->name('admin.edit');

Route::post('/edit/admin/', 'Users\Admin\AdminController@update')->name('admin.update');
/////////////////////////////////// client//////////////////////////

// Route::get('/admin/{id}', 'Users\Admin\AdminController@profile')->name('admin.profile');

Route::get('/edit/client/', 'Users\Client\ClientController@edit')->name('client.edit');

Route::post('/edit/client/', 'Users\Client\ClientController@update')->name('client.update');



