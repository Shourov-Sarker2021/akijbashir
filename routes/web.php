<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkijController;
use App\Models\Akij;
use App\Http\Controllers\ResturentController;
use App\Models\Resturent;
use App\Http\Controllers\LandController;
use App\Models\Land;
use App\Http\Controllers\HotelController;
use App\Models\Hotel;
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

Route::resource('akijs', AkijController::class);
Route::resource('resturent', ResturentController::class);
Route::resource('land', LandController::class);
Route::resource('hotel', HotelController::class);