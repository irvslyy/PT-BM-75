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

Route::get('/', 'BlogController@indexWelcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'firewall.all'], function () {
   
    //rounting users
    Route::get('/manage/users','UserController@index')->name('manage.users');

    //routing blog
    Route::get('/blog/index','BlogController@index')->name('blog.index');
    Route::get('/blog/create/post','BlogController@create')->name('blog.create');
    Route::get('/blog/edit/{id}','BlogController@edit')->name('blog.edit');
    Route::post('/blog/post','BlogController@store')->name('blog.post');
    Route::post('/blog/update/{id}','BlogController@update')->name('blog.update');
    Route::delete('/blog/delete/{id}','BlogController@destroy')->name('blog.delete');

    //inventory
    Route::get('/inventori','InventoryController@index')->name('inventory');
    Route::get('/inventori/create','InventoryController@create')->name('inventorycreate');
    Route::get('/inventori/edit/{id}','InventoryController@edit')->name('inventory.edit');
    Route::post('/inventory/update/{id}','InventoryController@update')->name('inventory.update');
    Route::post('/inventori/post','InventoryController@store')->name('inventorypost');
    Route::delete('/inventori/delete/{id}','InventoryController@destroy')->name('inventorydelete');
    Route::get('/autocomplete', 'InventoryController@autocomplete')->name('autocomplete');

    //project
    Route::get('/project/view','ProjectController@index')->name('project.index');
    Route::get('/project/create','ProjectController@create')->name('project.create');
    Route::post('/project/post','ProjectController@store')->name('project.store');

    //material
    Route::get('/material','MaterialController@index')->name('material.index');
    Route::get('/material/{id}/pembelian','MaterialController@index_two')->name('material.index-two');
    Route::get('/material/create','MaterialController@create')->name('material.create');
    Route::post('/material/post','MaterialController@store')->name('material.store');
    

    Route::post('/import/pembelian', 'MaterialController@import')->name('import.pembelian');
    Route::get('/export/pembelian','MaterialController@export')->name('export.pembelian');

    //report chart
    Route::get('/report/chart','ReportController@index')->name('report.index');
    Route::get('export','InventoryController@export')->name('export');

});




