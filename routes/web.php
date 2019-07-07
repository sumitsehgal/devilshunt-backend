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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'posts' => 'PostController'
]);

Route::post('/join-us', 'JoinUsController@store');

Route::get('thankyou', 'JoinUsController@thankyou')->name('thankyou');

Route::any('/tus/{any?}', function () {
    $response = app('tus-server')->serve();

    return $response->send();
})->where('any', '.*');
