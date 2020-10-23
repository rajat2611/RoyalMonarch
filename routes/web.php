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
Route::get('/team/{team}', 'CareersController@teamDetails');
Route::get('/How_it_works', function () {
    return view('pages.How_it_works');
});
Route::get('/career', 'CareersController@index');
Route::get('/career/{id}','CareersController@show');
Route::get('/careers/apply/{id}','CareersController@apply');
Route::post('apply-career','CareersController@applyJob');
Route::get('apply-thanks/{name}','CareersController@applyThanks');


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}','BlogController@show')->name('blog_1');
Route::get('/blogs/all','BlogController@index');
Route::get('/blogs/{item}','BlogController@show_2')->name('blogs');

Route::get('/support','ContactController@index');
Route::Post('/contact','ContactController@Store')->name("contact");

//modal1
Route::post('/join', 'JoinController@Store')->name("join");

Route::get('privacy-policies',function(){
    return view('pages.privacy');
});
Route::get('copyrights',function(){
    return view('pages.copyrights');
});
Route::get('terms',function(){
    return view('pages.terms');
});
Route::get('research',function(){
    return view('pages.rersearch');
});
Route::get('desclaimer',function(){
    return view('pages.desclaimer');
});
Route::get('applicant-privacy',function(){
    return view('pages.applicant-privacy');
});
Route::get('stay-alert',function(){
    return view('pages.stay_alert');
});
Route::get('ndncr',function(){
    return view('pages.ndncr');
});

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










Route::group(['prefix' => 'admin', 'middleware' => ['web', 'isAdmin']], function () {
     Route::get('/', 'AdminController@index');
    Route::get('category', 'AdminController@category');
    Route::get('category/status', 'AdminController@changeCateStatus');
    Route::post('category/add', 'AdminController@addCategory');
    Route::post('category/update', 'AdminController@updateCategory');
    Route::get('category/delete', 'AdminController@deleteCategory');
    Route::get('blogs', 'AdminController@blogs');
    Route::get('blog/add', 'AdminController@blogAdd');
    Route::post('blog/post', 'AdminController@blogPost');
    Route::get('blog/edit/{blog}', 'AdminController@blogEdit');
    Route::post('blog/update', 'AdminController@blogUpdate');
    Route::post('blog/delete', 'AdminController@deleteBlog');
    Route::get('blog/status', 'AdminController@changeStatus');
    
    Route::get('teams','AdminController@teams');
    Route::get('team/add','AdminController@teamAdd');
    Route::post('team/add','AdminController@teamPostAdd');
    Route::get('team/edit/{team}','AdminController@teamEdit');
    Route::post('team/update','AdminController@teamUpdate');
    Route::get('team/status','AdminController@teamStatus');
    Route::get('team/delete','AdminController@teamDelete');
    
    Route::get('career','AdminController@careers');
    Route::get('career/add','AdminController@careerAdd');
    Route::post('career/post','AdminController@careerPost');
    Route::post('career/update','AdminController@careerUpdate');
    Route::get('career/edit/{career}','AdminController@editCareer');
    Route::get('career/status','AdminController@careerStatus');
    Route::get('career/delete','AdminController@careerDelete');
    
    Route::get('career-applied','AdminController@careerApplied');
    Route::get('apply/view/{id}','AdminController@viewApplyCareer');
//    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
