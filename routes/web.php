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

Route::get('/welcome', function () {
    return view('index');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('wallet-deposit','AddMoneyController@payWithStripe');
Route::post('wallet-deposit/addmoney', 'AddMoneyController@postPaymentWithStripe');
Route::get('wallet-history','PageController@wallet_history');

Route::get('/design', function () {
    return view('design');
});

Route::post('/design/add', function (Request $request) {
dd($request);
    return view('design');
});


Route::get('/success', function () { return view('success');});
Route::get('/manual-design', function () { return view('manual-design');});
Route::get('/published', function () { return view('published');});

Route::POST('post/add', 'PageController@store');
Route::get('post/{slug}', 'PageController@show');
Auth::routes();






//color page
Route::get('/red', function () { return view('color.red');});
Route::get('/blue', function () { return view('color.blue');});
Route::get('/blun', function () { return view('color.blun');});
Route::get('/green', function () { return view('color.green');});

Route::get('/yellow', function () { return view('color.yellow');});
Route::get('/light', function () { return view('color.light');});
Route::get('/dark', function () { return view('color.dark');});
Route::get('/grey', function () { return view('color.grey');});

Route::get('allview', 'PageController@allview');
Route::POST('allview/add', 'PageController@allviewStore');
Route::get('post/{slug}', 'PageController@show');
Route::post('design/add', 'PageController@addDesign');



