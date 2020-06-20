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

Route::get('/', "ApiController@indexAction" );
Route::get('/blog_large', "ApiController@blog_largeAction" );
Route::get('/contact_ustwo', "ApiController@contact_ustwoAction" );
Route::get('/fixer_list', "ApiController@fixer_listAction" );
Route::get('/player_list', "ApiController@player_listAction" );
Route::get('/product_list', "ApiController@product_listAction" );
Route::get('/team_info', "ApiController@team_infoAction" );
