<?php

/**
 * CQXR開発テスト
 * CQXR開発テスト用API群
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\user;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
   return view('welcome');
});
Route::resource('/userlist', UserlistController::class);
Route::resource('/user/{id}', UserController::class);


// Route::get('userlist', function () {
//     $userlist = user::all();
//     $r = array();
//     $r['floor'] = $userlist;
//     return response()->json($r);
//     // return view('userlist', compact('userlist'));
// });

// Route::get('/user', function (Request $request,$id = null) {
//     return view('user');

//     // $userlist = user::all();
//     // return view('userlist', compact('userlist'));
// });

// Route::get('/user/{id}', 'User@index');
