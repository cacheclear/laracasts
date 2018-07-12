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

    // config() is a helperfunction:
    // The key specifies to catch the value from the "services.php" file in the
    // "config" directory, where in an multidimensional array under the keys
    // "stripe/secret" the value will be caught from the ".env" file via the env() function.

    return new \App\Billing\Stripe(config('services.stripe.secret'));
});

$stripe = App::make('App\Billing\Stripe');



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
