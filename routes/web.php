<?php

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
    return view('index');
});

//pages
Route::get('/index', function () {
    return view('index');
});
Route::get('/firm', function () {
    return view('pages.firm');
});
Route::get('/culture', function () {
    return view('pages.culture');
});
Route::get('/approach', function () {
    return view('pages.approach');
});
Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/team_1', function () {
    return view('pages.team_1');
});
Route::get('/How_it_works', function () {
    return view('pages.How_it_works');
});
Route::get('/career', 'CareersController@index');
Route::get('/career/{id}','CareersController@show');


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}','BlogController@show')->name('blog_1');
Route::get('/blogs/all','BlogController@index');
Route::get('/blogs/{item}','BlogController@show_2')->name('blogs');





Route::get('/support','ContactController@index');
Route::Post('/contact','ContactController@Store')->name("contact");



//modal1
Route::post('/join', 'JoinController@Store')->name("join");







//dashboard

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'UserController@index');
    Route::Post('/new_goal','UserController@Store')->name('new_goal');
    Route::get('/services', function () {
        return view('dashboard.services');
    });
    
    //reports
    Route::get('/tradebook','ReportsController@index');
    Route::get('/p&l','ReportsController@index_1');
    Route::get('/tax&pl','ReportsController@index_2');
    Route::Post('/rerutn_file','ReportsController@Store')->name("return_file");
    
    //funds
    Route::get('/overview',function () {
        return view('dashboard.overview');
    });
    Route::get('/statement',function () {
        return view('dashboard.statement');
    });
    Route::get('/payment_Gateway',function () {
        return view('dashboard.payment_Gateway');
    });
    
    //account
    Route::get('/account',function () {
        return view('dashboard.account');
    });
    
    //referrals 
    Route::get('/referrals','ReferralsController@index');
    Route::Post('/contact','ContactController@Store')->name("referrals");
});










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
