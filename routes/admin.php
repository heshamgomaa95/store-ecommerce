<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


///note that the prefix is admin all file route

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['prefix'=>'admin','namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function () {

        Route::get('/', 'DashboardController@index')->name('admin.dashboard');
        Route::get('logout','LoginController@logout')->name('admin.logout');

        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', 'SettingsController@EditShippingMethods')->name('edit.shipping.methods');
            Route::put('shipping-methods/{id}', 'SettingsController@UpdateShippingMethods')->name('update.shipping.methods');

        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@EditProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@UpdateProfile')->name('update.profile');

        });


        ###########################################Start routes Categories ###################################
        Route::group(['prefix'=>'main_categories'],function (){
           Route::get('/','MainCategoriesController@index')->name('admin.maincategories');
           Route::get('create','MainCategoriesController@create')->name('admin.maincategories.create');
           Route::post('store','MainCategoriesController@store')->name('admin.maincategories.store');
           Route::get('edit/{id}','MainCategoriesController@edit')->name('admin.maincategories.edit');
           Route::post('update/{id}','MainCategoriesController@update')->name('admin.maincategories.update');
           Route::get('delete/{id}','MainCategoriesController@destroy')->name('admin.maincategories.delete');
        });
        ###########################################End routes Categories ###################################

        ###########################################Start routes SubCategories ###################################
        Route::group(['prefix'=>'sub_categories'],function (){
            Route::get('/','SubCategoriesController@index')->name('admin.subcategories');
            Route::get('create','SubCategoriesController@create')->name('admin.subcategories.create');
            Route::post('store','SubCategoriesController@store')->name('admin.subcategories.store');
            Route::get('edit/{id}','SubCategoriesController@edit')->name('admin.subcategories.edit');
            Route::post('update/{id}','SubCategoriesController@update')->name('admin.subcategories.update');
            Route::get('delete/{id}','SubCategoriesController@destroy')->name('admin.subcategories.delete');
        });
        ###########################################End routes SubCategories ###################################

    });


    Route::group(['prefix'=>'admin','namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function () {

        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

    });

});

