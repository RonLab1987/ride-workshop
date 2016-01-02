<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('public.homepage');
});
 
 
Route::get('/price', function () {
    return view('public.price-list');
});
*/
get('/',['as'=>'homepage','uses'=>'PublicController@index']);
get('цены-на-обслуживание',['as'=>'priceList','uses'=>'PublicController@priceList']);
post ('спасибо',['as'=>'storeOrder', 'uses'=>'PublicController@store']);