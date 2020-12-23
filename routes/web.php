<?php


Route::prefix('admin')
        ->namespace('Admin')
        ->middleware('auth')
        ->group(function(){

    Route::get('balance', 'BalanceController@index')->name('balance.index');
    Route::get('deposit','BalanceController@deposit')->name('balance.deposit');
    Route::post('store', 'BalanceController@store')->name('balance.store');

    Route::get('/', 'AdminController@index')->name('admin.index');
   



});



Route::get('/', 'Site\SiteController@index')->name('site.home');




Auth::routes();

