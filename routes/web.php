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

Route::get('/corporate', function () {
    return view('categories.corporate');
})->middleware('verified');

Route::get('/education', function () {
    return view('categories.education');
})->middleware('verified');

Route::get('/tech', function () {
    return view('categories.tech');
})->middleware('verified');

Route::get('/distribution', function () {
    return view('categories.distribution');
})->middleware('verified');

Route::get('/mkting&sales', function () {
    return view('categories.mkting&sales');
})->middleware('verified');

Route::get('/manufacturing', function () {
    return view('categories.manufacturing');
})->middleware('verified');

Route::get('/law&safety', function () {
    return view('categories.law&safety');
})->middleware('verified');

Route::get('/hospitality', function () {
    return view('categories.hospitality');
})->middleware('verified');

Route::get('/financials', function () {
    return view('categories.financials');
})->middleware('verified');

Route::get('/business', function () {
    return view('categories.business');
})->middleware('verified');

Route::get('/construction', function () {
    return view('categories.construction');
})->middleware('verified');


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
// Route::get('/vendor', function () {
//     return view('vendor');
// })->middleware('verified' ) ;

Route::get('/profile', function () {
    return view('user.profile');
})->middleware('verified' ) ;

// Route::get('/aboutven', function () {
//     return view('aboutven');
// });

Auth::routes(['verify' => true]);

// Route::get('/vendor', 'HomeController@index')->name('vendor');

Route::get('/profile', 'HomeController@index')->name('user.profile');

Route::get('/user/{id}', 'UserController@profile')->name('user.profile');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');

Route::post('/edit/user/', 'UserController@update')->name('user.update');




