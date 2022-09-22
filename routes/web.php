<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeControllers;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Route::resource('employees', EmployeeControllers::class);
Route::resource('experience', PengalamanController::class);
Route::resource('profile', ProfileController::class);
//route CRUD
// Route::get('/profile','ProfileController@index');
// Route::get('/profile/tambah','ProfileController@tambah');
// Route::post('/profile/joindb','ProfileController@joindb');
//Route::get('/profile/{id}/edit','ProfileController@edit');
// Route::post('/profile/update','ProfileController@update');
// Route::DELETE('/profile/destroy/{id}','ProfileController@delete');

//Route::resource('profile', ProfileController::class);


//Route::resource('profile', ProfileController::class);
// Route::get('/profile/edit/{id}','ProfileController@edit');
// Route::post('/profile/update','ProfileController@update');
//Route::apiResource('experience', App\Http\Controllers\Api\PostController::class);
