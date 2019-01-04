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
Route::prefix('/reports')->group(function(){
    Route::get('{report}/finish', 'ReportController@finish')->name('reports.finish');
    Route::get('{report}/working', 'ReportController@working')->name('reports.working');
});
Route::resources([
    'departments' => 'DepartmentController',
    'reports' => 'ReportController',
    'messages' => 'MessageController'
]);

Route::resources([
]);