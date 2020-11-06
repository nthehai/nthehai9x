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
//Frontend
Route::get('/', function () {
    return view('layout');

});

//Backend
Route::get('admin','AdminController@index');
Route::get('dashboard','AdminController@show_dashboard');
Route::post('admin-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@log_out');

//CategoryProduct
// Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
// Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

// Route::get('/all-category-product','CategoryProduct@all_category_product');
// Route::get('/add-category-product','CategoryProduct@add_category_product');

// Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
// Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

// Route::post('/save-category-product','CategoryProduct@save_category_product');
// Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

// //BrandProduct
// Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
// Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');

// Route::get('/all-brand-product','BrandProduct@all_brand_product');
// Route::get('/add-brand-product','BrandProduct@add_brand_product');

// Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
// Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

// Route::post('/save-brand-product','BrandProduct@save_brand_product');
// Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');

//School
Route::get('/edit-school/{school_id}','SchoolController@edit_school');
Route::get('/delete-school/{school_id}','SchoolController@delete_school');

Route::get('/all-school','SchoolController@all_school');
Route::get('/add-school','SchoolController@add_school');

Route::get('/unactive-school/{school_id}','SchoolController@unactive_school');
Route::get('/active-school/{school_id}','SchoolController@active_school');

Route::post('/save-school','SchoolController@save_school');
Route::post('/update-school/{school_id}','SchoolController@update_school');

