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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("register_individual", "IndexController@register_individual");
Route::get("register_organisation", "IndexController@register_organisation");
Route::get("register_institution", "IndexController@register_institution");
Route::get("/", "IndexController@landing_page");
Route::get("/registerparking", "IndexController@registerparking");
Route::post("/addparkingslot", "IndexController@addparkingslot");
Route::get("/bookparking", "IndexController@bookparking");
Route::post("/bookparkingslot", "IndexController@bookparkingslot");
Route::get("/amount", "IndexController@amount");
Route::get("/test", "IndexController@test");

Route::get("/ref", "IndexController@ref");
