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

Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/user-roles', 'App\\Http\\Controllers\\Admin\userRolesController');
Route::resource('admin/missing', 'App\Http\Controllers\Admin\MissingController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\ReservationController');
Route::resource('admin/attendance', 'App\\Http\\Controllers\\Admin\attendanceController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');
Route::resource('admin/rstatus', 'App\Http\Controllers\Admin\rstatusController');
Route::resource('admin/schedule', 'App\Http\Controllers\Admin\scheduleController');
Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');