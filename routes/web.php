<?php

use Illuminate\Support\Facades\Route;

require_once app_path('Helpers/Global/SystemHelper.php');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Frontend 前端
 */

Route::group(['prefix' => 'frontend','as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__ . '/frontend/');
});

/**
 * Backend 後端
 */

Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    includeRouteFiles(__DIR__ . '/backend/');
});
