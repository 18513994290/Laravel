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
//test
Route::get('hi', function () {
    return 'hello word!';
});
Route::get('user/{id?}', function ($id = 1) {
    return "用户ID: " . $id;
})->name('user.profile');
//账号

Route::group(['prefix'=>'account'],function(){
    
   Route::get('/',function(){
	return "index";
   });	
   Route::get('centre',function(){
  	 return "centre";	
   });		

});

//命明空间+ 中间件
 Route::group(['prefix'=>'admin','namespace'=>'Admin'],function()
{   
    Route::get('login',function()
    {
     return "login";
    });
    
    Route::get('verify','LoginController@verify');


 });	
