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

//// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['namespace' => 'Easy\Application', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'root', 'uses' => 'HomeController@index']);
    Route::get('home', 'HomeController@index');
    Route::get('article', ['as' => 'article', 'uses' => 'ArticleController@index']);
    Route::get('articles/{id}','ArticleController@show');
    //Route::get('article/{article}', ['as' => 'article', 'uses' => 'ArticleController@show']);
    Route::get('page/','PagesController@index');
    Route::get('pages/{id}','PagesController@show');
    Route::post('comment/store', 'CommentsController@store');
    //Route::get('category/{category}',['as' => 'category', 'uses' => 'CategoryController@index']);//'CategoryController@index');
    Route::get('category/{category}','CategoryController@show');
    //Route::get('category/{id}', ['as' => 'category', 'uses' => 'CategoryController@index']);
    //Route::get('page/{page}', ['as' => 'page', 'uses' => 'PageController@index']);
    //Route::get('category/{category}', ['as' => 'category', 'uses' => 'CategoryController@index']);
});




Route::group(['prefix' => 'admin', 'namespace' => 'Easy\Admin', 'middleware' => 'auth'], function () {
    // GET
    Route::get('/', ['as' => 'admin.root', 'uses' => 'AdminHomeController@index']);
    //Route::get('setting', ['as' => 'admin.setting.index', 'uses' => 'SettingController@getSettings']);
    // POST
    //Route::post('page/order', ['as' => 'admin.page.order' , 'uses' => 'PageController@postOrder']);
    // PATCH
    //Route::patch('setting/{setting}', ['as' => 'admin.setting.update', 'uses' => 'SettingController@patchSettings']);
    // Resources
    //Route::resource('article', 'ArticleController');
    //Route::resource('category', 'CategoryController');
    Route::resource('pages', 'PagesController');
    Route::resource('articles', 'ArticlesController');
    Route::resource('comments', 'CommentsController');
    //Route::resource('user', 'UserController');
});


//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('home', 'HomeController@index');
//
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
Route::get('/articles','ArticlesController@index');
*/