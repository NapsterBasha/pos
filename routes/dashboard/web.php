<?php

Route::group(
    ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function()
    {
        Route::prefix('dashboard')->name('dashboard.')->group(function (){

            Route::get('/index','DashboardController@index')->name('index');



            //User Routes
            Route::Resource('user','UserController')->except(['show']);

        });//end of dashboard

    });




