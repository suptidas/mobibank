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


Route::get('/login',  'loginController@index');
Route::post('/login', 'loginController@verify');
Route::resource('employees','EmployeeController');
Route::resource('jobs','JobController');
//Route::get('search', 'SearchController@index')->name('search');
//Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');





Route::group(['middleware'=>['sess']], function() {

Route::get('/home',            'homeController@index')->name('home.index');

Route::get('/profile',          'homeController@profile')->name('home.profile');

Route::get('/empCreate',       'homeController@empCreate')->name('home.empCreate');
Route::post('/empCreate',      'homeController@empStore');

Route::get('/emplist',         'homeController@emplist')->name('home.emplist');

Route::get('/empPasswords/{id}', 'homeController@empPasswords')->name('home.empPasswords');

Route::get('/empEdit/{id}',    'homeController@empEdit')->name('home.empEdit');
Route::post('/empEdit/{id}',   'homeController@empUpdate');


Route::get('/empDelete/{id}',  'homeController@empDestroyView')->name('home.empDestroyView');
Route::post('/empDelete/{id}', 'homeController@empDestroy');

});

Route::get('/logout',  'logoutController@index');
