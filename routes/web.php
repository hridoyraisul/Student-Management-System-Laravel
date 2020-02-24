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
    return view('index');
});
Route::get('/add-new-student', 'Controller@Add')->name('add');
Route::post('/store-new-student', 'Controller@Store')->name('store');

Route::get('/student-list', 'Controller@List')->name('list');
Route::get('/details/{id}', 'Controller@Details');
Route::get('/edit/{id}', 'Controller@Edit');
Route::post('/update/{id}','Controller@Update');
Route::get('/delete/{id}', 'Controller@Delete');

Route::get('/search-student', 'SearchController@Search')->name('search');
Route::post('/search-result', 'SearchController@Result')->name('searchresult');

Route::get('/contact', 'Controller@Contact')->name('contact');

Route::resource('/fee','FeeController');