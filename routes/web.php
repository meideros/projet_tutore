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
// Admin route
Route::get('/', function () {
    return redirect(route("log_in"));
});
Route::get('admin_log_in', "Admin\AdminController@LogIn")->name('log_in');

Route::get('admin_dashboard', "Admin\AdminController@Dashboard")->name('dashboard');

Route::get('admin_password_forgotten', "Admin\AdminController@PasswordForgotten")->name('password_forgotten');

Route::get('admin_reset_password', "Admin\AdminController@ResetPassword")->name('reset_password');





