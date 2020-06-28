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

Auth::routes();


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::group(['prefix' => 'restaurants', 'as' => 'restaurants.'], function () {
        Route::get('/', 'RestaurantController@index')->name('index');
        Route::get('/newRestaurant', 'RestaurantController@create')->name('create');
        Route::post('/storeRestaurant', 'RestaurantController@store')->name('store');

        Route::get('menus/{restaurant}', 'MenuController@index')->name('menusIndex');
        Route::post('menus/delete', 'MenuController@delete')->name('menusDelete');
        Route::post('menus/update', 'MenuController@update')->name('menusUpdate');
        Route::post('menus/store', 'MenuController@store')->name('menusStore');


        Route::get('dishes/{menu}', 'DishController@index')->name('dishesIndex');
        Route::post('dishes/delete', 'DishController@delete')->name('dishesDelete');
        Route::post('dishes/store', 'DishController@store')->name('dishesStore');
    });
});

Route::get('/menu/{qrcode}', 'FrontendController@index')->name('menu.index');
