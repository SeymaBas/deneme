<?php


Route::group(['middleware' => 'guest'], function() {
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');


// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');



    /*
    Ziyaretçi Kısmı
    */

    Route::get('/', 'PostController@index');
    Route::get('/YaziDetay/{id}','PostController@show');




});

/*Admin Kısmı*/


Route::group(['middleware' => 'auth'], function() {
    Route::get('Admin/','BlogController@index');//formu göster
    Route::post('Admin/Kaydet','BlogController@store');//formdan gelen verileri kaydediyor
    Route::get('Admin/Sil/{id}','BlogController@destroy');
    Route::get('Admin/Duzenle/{id}','BlogController@edit');
    Route::post('Admin/Duzenle','BlogController@update');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
});