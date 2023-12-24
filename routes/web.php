<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
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
    return view('index');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::post('/login', [AuthController::class, "Login"]);
Route::get('/logout', [AuthController::class, "Logout"]);

Route::group(['prefix'=> 'admin', 'middleware'=>'authLogin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});