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

Route::get('/', 'ClientController@show')->name('route_FrontEnd_home');
Route::get('/list', 'ClientController@list')->name('route_FrontEnd_list');
Route::get('/detail/{id}', 'ClientController@detail')->name('route_FrontEnd_detail');
Route::get('/contact', 'ClientController@contact')->name('route_FrontEnd_contact');
Route::get('/new', 'ClientController@new')->name('route_FrontEnd_new');
Route::get('/detail_new/{id}', 'ClientController@detail_new')->name('route_FrontEnd_detail_new');



//Chỉ dùng cho đăng nhập
Route::get('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@getLogin']);
Route::post('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@postLogin']);

//Đăng xuất
Route::get('/logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@getLogout'])->middleware('auth');

Route::middleware(['auth'])->get('/admin', function () {
    return view('templates.layout');
});

Route::prefix('/admin/bds')->middleware(['auth'])->group(function() {
    Route::get('/', 'Bds\BdsController@index')->name('route_BackEnd_Bds_index');
    Route::match(['get', 'post'], '/add', 'Bds\BdsController@add')->name('route_BackEnd_Bds_add');
    Route::get('/changeStatus', 'Bds\BdsController@changeStatus')->name('changeStatus'); //Bds.changeStatus
    Route::get('/edit/{id}', 'Bds\BdsController@edit')->name('route_BackEnd_Bds_edit');
    Route::post('/update/{id}', 'Bds\BdsController@update')->name('route_BackEnd_Bds_update');
    Route::get('/delete/{id}', 'Bds\BdsController@delete')->name('route_BackEnd_Bds_delete');

});

Route::prefix('/admin/type_bds')->middleware(['auth'])->group(function() {
    Route::get('/', 'Bds\TypeBdsController@index')->name('route_BackEnd_Type_Bds_index');
    Route::match(['get', 'post'], '/add', 'Bds\TypeBdsController@add')->name('route_BackEnd_Type_Bds_add');
    Route::get('/edit/{id}', 'Bds\TypeBdsController@edit')->name('route_BackEnd_Type_Bds_edit');
    Route::post('/update/{id}', 'Bds\TypeBdsController@update')->name('route_BackEnd_Type_Bds_update');
    Route::get('/delete/{id}', 'Bds\TypeBdsController@delete')->name('route_BackEnd_Type_Bds_delete');
});

Route::prefix('/admin/news')->middleware(['auth'])->group(function() {
    Route::get('/', 'New\NewController@index')->name('route_BackEnd_New_index');
    Route::match(['get', 'post'], '/add', 'New\NewController@add')->name('route_BackEnd_New_add');
    Route::get('/edit/{id}', 'New\NewController@edit')->name('route_BackEnd_New_edit');
    Route::post('/update/{id}', 'New\NewController@update')->name('route_BackEnd_New_update');
    Route::get('/delete/{id}', 'New\NewController@delete')->name('route_BackEnd_New_delete');
});

Route::prefix('/admin/cate_new')->middleware(['auth'])->group(function() {
    Route::get('/', 'New\CategoryNewController@index')->name('route_BackEnd_Cate_New_index');
    Route::match(['get', 'post'], '/add', 'New\CategoryNewController@add')->name('route_BackEnd_Cate_New_add');
    Route::get('/edit/{id}', 'New\CategoryNewController@edit')->name('route_BackEnd_Cate_New_edit');
    Route::post('/update/{id}', 'New\CategoryNewController@update')->name('route_BackEnd_Cate_New_update');
    Route::get('/delete/{id}', 'New\CategoryNewController@delete')->name('route_BackEnd_Cate_New_delete');
});

Route::prefix('/admin/users')->middleware(['auth'])->group(function() {
    Route::get('/', 'UserController@index')->name('route_BackEnd_User_index');
    Route::match(['get', 'post'], '/add', 'UserController@add')->name('route_BackEnd_User_add');
    Route::get('/edit/{id}', 'UserController@edit')->name('route_BackEnd_User_edit');
    Route::post('/update/{id}', 'UserController@update')->name('route_BackEnd_User_update');
    Route::get('/delete/{id}', 'UserController@delete')->name('route_BackEnd_User_delete');
});

Route::prefix('/admin/tu_van')->middleware(['auth'])->group(function() {
    Route::get('/', 'TuVanController@index')->name('route_BackEnd_Tu_Van_index');
});

