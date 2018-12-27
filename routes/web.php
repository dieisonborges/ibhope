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

/* --------------------- SITE --------------------- */
Route::get('/', function () {
    return view('site.index');
});

Route::get('/metas', function () {
    return view('site.meta');
});

/* --------------------- END SITE --------------------- */

