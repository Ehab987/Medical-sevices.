<?php

use App\Mail\NotifyEmail;
use Illuminate\Support\Facades\Mail;


Auth::routes();

Route::get('/', 'Front\FrontController@create')->name('create.Order');
Route::post('/Order/store', 'Front\FrontController@store')->name('store.Order');

Route::get('/admin', 'Admin\AdminController@index')->name('admin');

    
Route::get('/admin/orders', 'Admin\AdminController@allOrders')->name('admin.All.Orders');
Route::get('/admin/delete/order/{id}', 'Admin\AdminController@deleteOrder')->name('admin.delete.order');

                //  services
Route::get('/admin/services', 'Admin\AdminController@allServices')->name('admin.All.Services'); 

Route::get('/admin/add/service', 'Admin\AdminController@addService')->name('admin.add.Service');
Route::post('/admin/service/save', 'Admin\AdminController@saveService')->name('admin.save.Service');

Route::get('/admin/delete/service/{id}', 'Admin\AdminController@deleteService')->name('admin.delete.Service');
Route::get('/admin/edit/service/{id}', 'Admin\AdminController@editService')->name('admin.edit.Service');
Route::post('/admin/update/service/{id}', 'Admin\AdminController@updateService')->name('admin.update.Service');


Route::get('/admin/Cities', 'Admin\AdminController@allCities')->name('admin.All.Cities');
Route::get('/admin/edit/city/{id}', 'Admin\AdminController@editCity')->name('admin.edit.City');
Route::post('/admin/update/city/{id}', 'Admin\AdminController@updateCity')->name('admin.update.city');
Route::get('/admin/delete/city/{id}', 'Admin\AdminController@deleteCity')->name('admin.delete.City');
Route::get('/admin/add/city', 'Admin\AdminController@addCity')->name('admin.add.City');

Route::post('/admin/city/save', 'Admin\AdminController@saveCity')->name('admin.save.City');

Route::get('/admin/OrdersToday','Admin\AdminController@ordersToday')->name('OrdersToday');
