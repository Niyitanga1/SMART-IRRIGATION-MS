<?php

use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authenticationController;
use App\Http\Controllers\CooperativesController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\ManagersController;
use App\Http\Controllers\LoginController;

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
    Debugbar::error('INFO  !');
//return view('home');
return view('home');
});


Route::get('/login', function () {
    return view('login');
    
});
Route::get('/dashboard', function () {
    return view('dashboard');
    
});

Route::get('/admin', function () {
    return view('admin');
    
});




Route::get('/admin/admin', function () {
    return view('admin.admin');
    
});

Route::get('/admin/cooperatives', function () {
    return view('admin.cooperatives');});

    Route::get('/admin/devices', function () {
        return view('admin.devices');});
     
Route::get('/auth/passwords/login', function () {
    return view('auth.passwords.login');
    
});



//inserting  data

//Route::get('/', 'CooperativesController@index');

Route::get('store', 'CooperativesController@store');
Route::post('store', 'CooperativesController@store');

Route::get('store', 'DevicesController@store');
Route::post('store', 'DevicesController@store');
//authentication routes

Route::get('/adminpanel',[authenticationController::class,'login']);
Route::get('/registration',[authenticationController::class,'registration']);
Route::get('/auth/registration', function () {
    return view('auth.registration');});

Route::get('/auth/login', function () {
    return view('auth.login');});

Route::post('/registerUser',[authenticationController::class,'registerUser'])->name('registerUser');
Route::post('/loginAdmin',[authenticationController::class,'loginAdmin'])->name('loginAdmin');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//routes  for adding data
Route::GET('Dashboard', [CooperativesController::class, 'store']);
Route::post('Dashboard', [CooperativesController::class, 'store']);
Route::get('/role',[CooperativesController::class,'role'])->name('role');


//Route::get('/role',[DevicesController::class,'role'])->name('role');
//viewing data

Route::get('/view-records','CooperativesController@viewcooperatives');
//Route::get('/view-records','LoginController@viewusers');
//deleting  data

Route::get('delete/{id}','CooperativesController@delete');

// updating data
//Route::get('update/{id}','CooperativesController@edit');


Route::get('edit-records','CooperativesController@index');
Route::get('edit/{id}','CooperativesController@show');
Route::post('edit/{id}','CooperativesController@edit');

//routes for adding data




//  devices    routes

Route::GET('adddevices', [DevicesController::class, 'insertdevice']);
Route::post('adddevices', [DevicesController::class, 'insertdevice']);

Route::get('/view-devices','DevicesController@viewdevices');
Route::get('deletedevice/{id}','DevicesController@deletedevice');

Route::get('edit-records','DevicesController@index');
Route::get('editdevice/{id}','DevicesController@show');
Route::post('editdevice/{id}','DevicesController@editdevice');


Route::GET('addmanagers', [ManagersController::class, 'entermanager']);
Route::post('addmanagers', [ManagersController::class, 'entermanager']);

Route::get('/view-managers','ManagersController@viewmanagers');





//login  routes 

Route::post('login', [LoginController::class, 'loginAdmin']);


