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
    if(!Auth::user())
    {
        return view('auth.login');
    }
    else
    return redirect(route('home'));

});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/clientall', function () {
    return view('clients.clientAll');
});

Auth::routes();
Route::middleware('auth')->group
(
    function ()
    {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('clients','ClientController');
        Route::resource('services','ServiceController');
        Route::get('/clients/search','ClientController@search');
    }
);
Route::get('/create/project/{id}','ProjectController@index');
Route::post('/create/project','ProjectController@create');
Route::get('/client/{id}/projects','ProjectController@show');
Route::get('/projects','ProjectController@showall');
Route::get('/downloadPDF/{id}','ProjectController@downloadPDF');
Route::get('/project/{id}/status','ProjectController@status');
Route::get('/hello','ProjectController@what');
