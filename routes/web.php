<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('admin', 'AdminController');

Route::get('/admin', 'authController@authenticated');


Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/createUsers', function () {
    return view('createUsers');
});


Route::get('/listUsers', function () {
    return view('listUsers');
});

Route::get('/deleteUsers', function () {
    return view('deleteUsers');
});

Route::get('/updateUsers', function () {
    return view('updateUsers');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/addTask', function () {
    return view('addTask');
});

Route::get('/taskList', function () {
    return view('taskList');
});

Route::get('/listReports', function () {
    return view('listReports');
});
Route::get('/deleteReports', function () {
    return view('deleteReports');
});

Route::get('/tasksUser', function () {
    return view('tasksUser');
});
