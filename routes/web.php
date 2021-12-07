<?php

use Illuminate\Support\Facades\Route;

// Admin panel
Route::get('/','User\HomeController@index');
Route::get('/single-place/{id}/{slug}','User\HomeController@single_place');
Route::get('/hotels','User\HomeController@hotel');
Route::get('/gallery','User\GalleryController@index');
Route::get('/cars','User\CarController@index');
Route::get('/blogs','User\BlogController@index');
Route::get('/places','User\BlogController@place');
Route::get('/contact-us','User\HomeController@contact');

Route::post('/contact-store','ContactController@store');

Route::group(['middleware' => 'auth'],function(){
    //dashboard
    

    Route::group(['prefix' => 'admin'],function(){
        
        Route::get('dashboard','Admin\DashboardController@index');
        //blog
        Route::get('blog/list','Admin\BlogController@index'); 
        Route::get('blog/create','Admin\BlogController@create'); 
        Route::post('blog/store','Admin\BlogController@store'); 
        Route::get('blog/update-page/{id}','Admin\BlogController@update_page');
        Route::post('blog/update','Admin\BlogController@update');  
        Route::get('blog/delete/{id}','Admin\BlogController@delete');
        
        
        //car
        Route::get('car/list','Admin\CarController@index'); 
        Route::get('car/create','Admin\CarController@create'); 
        Route::post('car/store','Admin\CarController@store'); 
        Route::get('car/update-page/{id}','Admin\CarController@update_page');
        Route::post('car/update','Admin\CarController@update');  
        Route::get('car/delete/{id}','Admin\CarController@delete');
        
        
        //gallery
        Route::get('gallery/list','Admin\GalleryController@index'); 
        Route::get('gallery/create','Admin\GalleryController@create'); 
        Route::post('gallery/store','Admin\GalleryController@store'); 
        Route::get('gallery/update-page/{id}','Admin\GalleryController@update_page');
        Route::post('gallery/update','Admin\GalleryController@update');  
        Route::get('gallery/delete/{id}','Admin\GalleryController@delete');
        

        //hotel
        Route::get('hotel/list','Admin\HotelController@index'); 
        Route::get('hotel/create','Admin\HotelController@create'); 
        Route::post('hotel/store','Admin\HotelController@store'); 
        Route::get('hotel/update-page/{id}','Admin\HotelController@update_page');
        Route::post('hotel/update','Admin\HotelController@update');  
        Route::get('hotel/delete/{id}','Admin\HotelController@delete');

        //hotel-type
        Route::get('hotel-type/list','Admin\HotelTypeController@index'); 
        Route::get('hotel-type/create','Admin\HotelTypeController@create'); 
        Route::post('hote-type/store','Admin\HotelTypeController@store'); 
        Route::get('hotel-type/update-page/{id}','Admin\HotelTypeController@update_page');
        Route::post('hotel-type/update','Admin\HotelTypeController@update');  
        Route::get('hotel-type/delete/{id}','Admin\HotelTypeController@delete');


        //Place
        Route::get('place/list','Admin\PlaceController@index'); 
        Route::get('place/create','Admin\PlaceController@create'); 
        Route::post('place/store','Admin\PlaceController@store'); 
        Route::get('place/update-page/{id}','Admin\PlaceController@update_page');
        Route::post('place/update','Admin\PlaceController@update');  
        Route::get('place/delete/{id}','Admin\PlaceController@delete');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/','Visitor\IndexController@index');