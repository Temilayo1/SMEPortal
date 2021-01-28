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
    return view('login');
});

// client
Route::get('/register', 'PagesController@register');
Route::get('/login', 'PagesController@login');
Route::get('/resetPassword', 'PagesController@resetPassword');
Route::get('/bizInfo', 'PagesController@bizInfo');
Route::get('/feedback', 'PagesController@feedback');
Route::get('/pricing', 'PagesController@pricing');

Route::get('/home', 'PagesController@home');
Route::get('/new_request', 'PagesController@new_request');
Route::get('/myRequests', 'PagesController@myRequests');
Route::get('/expertProfile', 'PagesController@expertProfile');
Route::get('/news', 'PagesController@news');
Route::get('/profile', 'PagesController@profile');

// admin
Route::get('/admin/home_ad', 'PagesController@home_ad');
Route::get('/admin/clients', 'PagesController@clients');
Route::get('/admin/admin', 'PagesController@admin');
Route::get('/admin/experts', 'PagesController@experts');
Route::get('/admin/manage_rates', 'PagesController@manage_rates');
Route::get('/admin/subscribers', 'PagesController@subscribers');
Route::get('/admin/newSub', 'PagesController@newSub');
Route::get('/admin/pending_requests', 'PagesController@pending_requests');
Route::get('/admin/active_requests', 'PagesController@active_requests');
Route::get('/admin/completed_requests', 'PagesController@completed_requests');
Route::get('/admin/new_event', 'PagesController@new_event');

// expert
Route::get('/expert/home_ex', 'PagesController@home_ex');
Route::get('/expert/reply_request', 'PagesController@reply_request');
Route::get('/expert/viewRequest', 'PagesController@viewRequest');
Route::get('/expert/view', 'PagesController@view');
Route::get('/expert/myProfile', 'PagesController@myProfile');