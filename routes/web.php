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
    return view('welcome');
});

Route::get('/login',  'LoginController@index')->name('login.index');
Route::get('/logout',  'LogoutController@index')->name('logout.index');
Route::post('/login', 'LoginController@verify');
//Route::get('/logout', 'logoutController@index')->name('logout');
Route::get('/registration', 'RegistrationController@index')->name('reg.index');
Route::post('/registration', 'RegistrationController@store')->name('reg.store');
Route::resource('accounts','AccountController');
Route::get('/account_pdf', 'AccountPDFController@index');
Route::get('/account_pdf/pdf', 'AccountPDFController@pdf');
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

Route::group(['middleware'=>['sess']], function() {
//Employee
Route::resource('employees','EmployeeController');
Route::resource('jobs','JobController');
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
Route::get('/dynamic_pdf', 'DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');
//Laravel 7 Http Client Request
Route::get('posts','PostController@index');
Route::get('posts/store','PostController@store');
Route::get('linkposts','LinkPostController@index');
Route::get('linkposts/store','LinkPostController@store');
Route::get('ajaxImageUpload', 'AjaxImageUploadController@ajaxImageUpload');
Route::post('ajaxImageUpload', 'AjaxImageUploadController@ajaxImageUploadPost')->name('ajaxImageUpload');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');


});

// Route::group(['middleware'=>['sess']], function() {



// //sadat
// Route::get('/home',            'homeController@index')->name('home.index');
// Route::get('/profile',          'homeController@profile')->name('home.profile');
// Route::get('/empCreate',       'homeController@empCreate')->name('home.empCreate');
// Route::post('/empCreate',      'homeController@empStore');
// Route::get('/emplist',         'homeController@emplist')->name('home.emplist');
// Route::get('/empPasswords/{id}', 'homeController@empPasswords')->name('home.empPasswords');
// Route::get('/empEdit/{id}',    'homeController@empEdit')->name('home.empEdit');
// Route::post('/empEdit/{id}',   'homeController@empUpdate');
// Route::get('/empDelete/{id}',  'homeController@empDestroyView')->name('home.empDestroyView');
// Route::post('/empDelete/{id}', 'homeController@empDestroy');
// });

