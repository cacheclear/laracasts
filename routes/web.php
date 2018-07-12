<?php

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

//Example Code for working with the Service Container

App::bind('App\Billing\Stripe', function(){
    return new \App\Billing\Stripe('1232dfg32df3g2f1dfg321');
});




Route::get('/home', 'PostsController@index');

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/about', function (){
    return view('about');
});

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
