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

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'when' => ['language' => '[a-zA-Z]{2}']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/switch-language', function () {
        // return changeLanguage('ed') . " klk";
        return view('lang');
    });

    Route::get('/long/url/switch/{id}/language', function ($_, $id) {
        // return changeLanguage('ed') . " klk";
        return view('long')->with('id', $id);
    });
});
