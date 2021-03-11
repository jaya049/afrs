<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AirlineController;//setting controller path


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
Route::view('n','sample');
Route::view('index','index');
Route::view('addflightform','flightreg');
Route::get('addflight',[AirlineController::class,'addflight']);//insert addflights form data into db
Route::view('airport','airportdetails');//airport details add form
Route::get('addairport',[AirlineController::class,'addairport']);//insert airport details.
Route::get('viewairport',[AirlineController::class,'viewairport']);//view airport details.

//Flightsearch
Route::view('flightsearchform','flightsearch');
Route::get('searchflight',[AirlineController::class,'searchflight']);

