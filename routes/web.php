<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffieerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrCodeGeneratorController;





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

// Route::get('/', function () { return view('welcome');});

//tests Route
Route::get('/QRcodeTest', function () { return view('qr-code');});
Route::get('/qr_code', [QrCodeGeneratorController::class, 'index'])->name('qr-code');

Route::get('/layoutTest', function () { return view('test_layouts');});

//Routes Login-Logout
Route::get('/', [ LoginController::class, 'Login' ])->name('Login');
Route::post('/check_login', [ LoginController::class, 'Check_Login' ])->name('check_login');
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

//Routes Admin
Route::get('/admin_profile', [ AdminController::class, 'admin_profile' ])->name('admin_profile');
Route::get('/admin_member', [ AdminController::class, 'admin_member' ])->name('admin_member');
Route::post('/admin_member_add', [ AdminController::class, 'add_admin_member' ])->name('add_admin_member');
Route::get('/admin_member_edit{users_id}', [ AdminController::class, 'edit_admin_member' ])->name('edit_admin_member');
Route::post('/admin_member_dataUpdate', [ AdminController::class, 'dataUpdate_admin_member' ])->name('dataUpdate_admin_member');
Route::get('/admin_member_delete{users_id}', [ AdminController::class, 'delete_admin_member' ]);
Route::get('/admin_car', [ AdminController::class, 'admin_car' ])->name('admin_car');
Route::get('/admin_car_from_add{users_id}', [ AdminController::class, 'admin_car_from_add' ])->name('admin_car_from_add');
Route::post('/admin_car_add', [ AdminController::class, 'admin_car_add' ])->name('admin_car_add');
Route::get('/admin_QRcode', [ AdminController::class, 'admin_QRcode' ])->name('admin_QRcode');
Route::get('/admin_record', [ AdminController::class, 'admin_record' ])->name('admin_record');

//Routes Offieers
Route::get('/offieer_profile', [ OffieerController::class, 'offieer_profile' ])->name('offieer_profile');
Route::get('/offieer_record', [ OffieerController::class, 'offieer_record' ])->name('offieer_record');

//Routes Users
Route::get('/user_profile', [ UserController::class, 'user_profile' ])->name('user_profile');





