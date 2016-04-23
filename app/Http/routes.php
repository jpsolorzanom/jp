<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::get('/', 'Principal@index');

  Route::post('/', function() {
      return '[pruevbas]';
  });

  Route::get('notes/create',function(){
    return '[PRUEBA]';
  });

  Route::get('notes/{id_nota}/{slug?}',function($id_nota, $slug=null){
    dd('[PRUEBA]'.$id_nota,$slug);
  })->where('id_nota','[0-9]+');
});
