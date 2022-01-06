<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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

Route::get('/test', function (UserDataTable $dataTable){
    return $dataTable->render('index');
});

Auth::routes();

// Route::get('/test', 'TestController@index')->name('test.drive');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users','HomeController@getUsers')->name('get.users');
