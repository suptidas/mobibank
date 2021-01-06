<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\managerController;

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

Route::group(['middleware'=>['sess']], function() {

Route::get('/manager/home',     'managerController@index')->name('manager.index');

Route::get('/manager/profile',          'managerController@profile')->name('manager.profile');

Route::get('/manager/profileUpdate',    'managerController@profileView')->name('manager.profileView');
Route::post('/manager/profileUpdate',   'managerController@profileUpdate');


//Employees

Route::get('/manager/empCreate',       'managerController@empCreate')->name('manager.empCreate');
Route::post('/manager/empCreate',      'managerController@empStore');

Route::get('/manager/emplist',         'managerController@emplist')->name('manager.emplist');

Route::get('/manager/empDetails/{id}', 'managerController@empDetails')->name('manager.empDetails');

Route::get('/manager/empEdit/{id}',    'managerController@empEdit')->name('manager.empEdit');
Route::post('/manager/empEdit/{id}',   'managerController@empUpdate');


Route::get('/manager/empDelete/{id}',  'managerController@empDestroyView')->name('manager.empDestroyView');
Route::post('/manager/empDelete/{id}', 'managerController@empDestroy');

Route::get('/empSearch',       'managerController@empSearch');
Route::get('/search',          'managerController@search')->name('search');

Route::get('/manager/empSalary',       'managerController@empSalary')->name('manager.empSalary');

Route::get('/manager/empAddSalaryView/{id}',      'managerController@empAddSalaryView')->name('manager.empAddSalaryView');
Route::post('/manager/empAddSalaryView/{id}',      'managerController@empAddSalary')->name('manager.empAddSalary');


//Customer

Route::get('/manager/custlist',         'managerController@custlist')->name('manager.custlist');

Route::get('/manager/custEdit/{id}',    'managerController@custEdit')->name('manager.custEdit');
Route::post('/manager/custEdit/{id}',   'managerController@custUpdate');

Route::get('/manager/custDetails/{id}', 'managerController@custDetails')->name('manager.custDetails');

Route::get('/manager/custDelete/{id}',  'managerController@custDestroyView')->name('manager.custDestroyView');

Route::post('/manager/custDelete/{id}',  'managerController@custDestroy')->name('manager.custDestroy');


//Admin

	Route::get('/adminhome',             'adminController@adminhome')->name('admin.home');
	Route::get('/employeelist',          'adminController@employeelist')->name('admin.employeelist');
	Route::get('/createemployee',        'managerController@empCreate')->name('admin.createemployee');
	Route::post('/createemployee',       'managerController@empStore');
	Route::get('/editemployee/{id}',     'adminController@edit')->name('admin.editemployee');
	Route::post('/editemployee/{id}',    'adminController@update');
	Route::get('/deleteemployee/{id}',   'adminController@delete')->name('admin.deleteemployee');
	Route::post('/deleteemployee/{id}',  'adminController@destroy');
	Route::get('/employeedetails/{id}',  'adminController@show')->name('admin.employeedetails');
	Route::get('/personalinfo',          'adminController@info')->name('admin.personalinfo');
	Route::post('/personalinfo',         'adminController@personalupdate');
	Route::get('/customerlist',          'managerController@customerlist')->name('admin.customerlist');


    Route::get('/users', 'adminController@index2')->name('admin.users');

	Route::get('/search', 'adminController@search')->name('search');



});

Route::get('/logout',  'logoutController@index');