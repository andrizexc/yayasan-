<?php

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

// --------------------------------- guest

Route::get('/', 'GuestController@home')->name('guestWelcome');
Route::get('/about', 'GuestController@about');
Route::get('/history', 'GuestController@history');
Route::get('/facility', 'GuestController@facility');
Route::get('/contact', 'GuestController@contact');
Route::get('/news', 'GuestController@news');
Route::get('/prestations', 'GuestController@prestations');
Route::get('/articles', 'GuestController@articles');
Route::get('/schedules', 'GuestController@schedules');
Route::get('/gallery', 'GuestController@gallery');

Route::get('/schedules/{id}', 'GuestController@getSch');
Route::get('/articles/{id}', 'GuestController@getArt');
Route::get('/news/{id}', 'GuestController@getNews');
Route::get('/prestations/{id}', 'GuestController@getPres');

// --------------------------------- end guest

// --------------------------------- user

Route::prefix('home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/articles', 'HomeController@articles')->name('articles');
    Route::get('/news', 'HomeController@news')->name('news');
    Route::get('/prestations', 'HomeController@prestations')->name('prestations');
    Route::get('/schedules', 'HomeController@index')->name('schedules');
    Route::get('/gallery', 'HomeController@gallery')->name('gallery');

    Route::group(['prefix' => 'add', 'as' => 'addGroup.'], function(){
        Route::get('/article', 'HomeController@addArt')->name('add-art');
        Route::get('/news', 'HomeController@addNews')->name('add-news');
        Route::get('/prestation', 'HomeController@addPres')->name('add-pres');
        Route::get('/schedule', 'HomeController@addSch')->name('add-sch');
        Route::get('/gallery', 'HomeController@addGal')->name('add-gal');

        Route::post('/agenda', 'HomeController@schAdd');
        Route::post('/artikel', 'HomeController@newsAdd');
        Route::post('/berita', 'HomeController@newsAdd');
        Route::post('/prestasi', 'HomeController@presAdd');
        Route::post('/galeri', 'HomeController@galAdd');
    });

    Route::group(['prefix' => 'edit', 'as' => 'addGroup.'], function(){
        Route::get('/agenda/{id}', 'HomeController@editSch')->name('add-sch');
        Route::get('/artikel/{id}', 'HomeController@editArt')->name('add-art');
        Route::get('/berita/{id}', 'HomeController@editNews')->name('add-news');
        Route::get('/prestasi/{id}', 'HomeController@editPres')->name('add-pres');

        Route::post('/agenda/{id}', 'HomeController@schEdit');
        Route::post('/artikel/{id}', 'HomeController@newsEdit');
        Route::post('/berita/{id}', 'HomeController@newsEdit');
        Route::post('/prestasi/{id}', 'HomeController@presEdit');
    });

    Route::group(['prefix' => 'delete'], function(){
        Route::delete('/agenda/{id}', 'HomeController@newsDel');
        Route::delete('/aritkel/{id}', 'HomeController@newsDel');
        Route::delete('/berita/{id}', 'HomeController@newsDel');
        Route::delete('/prestasi/{id}', 'HomeController@presDel');
        Route::delete('/galeri/{id}', 'HomeController@galDel');
    });

    Route::group(['prefix' => 'notification'], function(){
        Route::get('/', 'HomeController@homeNotif');
        Route::post('/get', 'HomeController@getNotif');
        Route::post('/read/{id}', 'HomeController@readNotif');
    });
});

// --------------------------------- end user

// --------------------------------- admin

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index');
    
    Route::group(['prefix' => 'msg'], function(){
        Route::post('/read/{id}', 'AdminController@msgRead');
        Route::delete('/delete/{id}', 'AdminController@msgDel');
    });
    
    Route::group(['prefix' => '/messages'], function(){
        Route::get('/', 'AdminController@notif');
        Route::get('/add', 'AdminController@notifAdd');

        Route::post('/add', 'AdminController@addNotif');
        Route::delete('/delete/{id}', 'AdminController@msgDel');
    });

    Route::group(['prefix' => '/post'], function(){
        Route::get('/', 'AdminController@schedule')->name('home');
        Route::get('/articles', 'AdminController@article')->name('articles');
        Route::get('/news', 'AdminController@news')->name('news');
        Route::get('/prestations', 'AdminController@prestation')->name('prestations');
        Route::get('/schedules', 'AdminController@schedule')->name('schedules');
        Route::get('/gallery', 'AdminController@gallery')->name('gallery');
    });

    Route::group(['prefix' => 'add', 'as' => 'addGroup.'], function(){
        Route::get('/article', 'HomeController@addArt')->name('add-art');
        Route::get('/news', 'HomeController@addNews')->name('add-news');
        Route::get('/prestation', 'HomeController@addPres')->name('add-pres');
        Route::get('/schedule', 'HomeController@addSch')->name('add-sch');
        Route::get('/gallery', 'HomeController@addGal')->name('add-gal');

        Route::post('/agenda', 'HomeController@schAdd');
        Route::post('/artikel', 'HomeController@newsAdd');
        Route::post('/berita', 'HomeController@newsAdd');
        Route::post('/prestasi', 'HomeController@presAdd');
    });

    Route::group(['prefix' => 'edit', 'as' => 'addGroup.'], function(){
        Route::get('/agenda/{id}', 'HomeController@editSch')->name('add-sch');
        Route::get('/artikel/{id}', 'HomeController@editArt')->name('add-art');
        Route::get('/berita/{id}', 'HomeController@editNews')->name('add-news');
        Route::get('/prestasi/{id}', 'HomeController@editPres')->name('add-pres');

        Route::post('/unit/{id}', 'AdminController@editUnit');
    });

    Route::group(['prefix' => 'view'], function(){
        Route::get('/', 'AdminController@units');
        Route::get('/articles', 'AdminController@viewArt');
        Route::get('/news', 'AdminController@viewNews');
        Route::get('/prestations', 'AdminController@viewPres');
        Route::get('/schedules', 'AdminController@viewSch');
        Route::get('/gallery', 'AdminController@viewGal');
        Route::get('/units', 'AdminController@units');
    });
});

// --------------------------------- end admin

// --------------------------------- json

Route::group(['prefix' => 'resp'], function(){
    Route::post('footer', 'GuestController@footer');
    Route::post('welcome', 'GuestController@welcome');
    Route::post('gallery/{skip}', 'GuestController@respGal');
    Route::post('news/{type}', 'GuestController@respNews');
    Route::post('news/{type}/{skip}', 'GuestController@respNews');
    Route::post('news/{type}/{skip}/{take}', 'GuestController@respNews');
    Route::post('pres/{skip}', 'GuestController@respPres');
    Route::post('edit/unit/{id}', 'AdminController@getEdit');
});

// --------------------------------- end json
