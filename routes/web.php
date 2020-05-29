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


Route::get('/', ['uses' => 'DashboardController@homeIndex']);



// Route::get('/apple', function () {
//     return view('apple');
// });

Route::get('/apple', ['uses' => 'DashboardController@showproductapple']);
Route::get('/samsung', ['uses' => 'DashboardController@showproductsamsung']);
Route::get('/xiaomi', ['uses' => 'DashboardController@showproductxiaomi']);
Route::get('/allproducts', ['uses' => 'DashboardController@showallproducts']);
Route::get('/product/{productid}', 'DashboardController@showproduct');
Route::get('/oppo', ['uses' => 'DashboardController@showproductoppo']);
// Route::get('/oppo', function () {
//     return view('oppo');
// });




// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/signup', ['uses' => 'signinController@sessionchecksignup']);


// Route::get('/signin', function () {
//     return view('signin');
// });
Route::get('/signin', ['uses' => 'signinController@sessionchecksignin']);
Route::post('/signin', ['uses' => 'signinController@signup']);

Route::get('/dashboard', ['uses' => 'signinController@publicIndex']);
Route::post('/dashboard', ['uses' => 'signinController@login']);

Route::get('/logout', ['uses' => 'DashboardController@logout']);





Route::get('/admin', function () {
    return view('admin');
});
Route::get('/adminloggedin', ['uses' => 'DashboardController@adminlogged']);
Route::get('/adminaddproduct', ['uses' => 'DashboardController@adminproduct']);

Route::post('/adminaddproduct', ['uses' => 'DashboardController@adminproductadd']);


Route::get('/adminredirect', ['uses' => 'DashboardController@adminr']);
Route::post('/adminredirect', ['uses' => 'signinController@admin']);

Route::patch('/updatestatusordered/{id}', 'DashboardController@checkoutorder');
Route::patch('/updatestatusdelivered/{id}', 'DashboardController@updateAdminStatusDelivered');
Route::patch('/updatestatusfinished/{id}', 'DashboardController@updateAdminStatusFinished');


Route::get('/aboutus', ['uses' => 'signinController@sessioncheckaboutus']);
Route::get('/aboutusignedin', ['uses' => 'signinController@sessioncheckaboutus']);

Route::get('/profile', ['uses' => 'signinController@sessioncheckprofile']);
// Route::patch('/profile', ['uses' => 'signinController@updatesave']);
Route::patch('/update/{id}', 'signinController@updateAppStatus');

Route::get('/cart', ['uses' => 'DashboardController@sessioncheckcart']);
Route::post('/addcart/{productid}', ['uses' => 'DashboardController@addtocart']);
Route::get('/checkout', ['uses' => 'DashboardController@sessioncheckout']);


Route::get('/history/{historyid}', 'DashboardController@showhistory');

Route::get('/orderhistory', ['uses' => 'DashboardController@order']);

Route::delete('/deleteitem/{billdetailid}', ['uses' => 'DashboardController@deleteproductcart']);
Route::get('/deletecart/{currentbillid}', ['uses' => 'DashboardController@deleteallcart']);
