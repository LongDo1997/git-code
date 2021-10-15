<?php

use GuzzleHttp\Middleware;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
function key_name($key){
    return Category::where('key_name',$key)->first()->slug;
}
Route::get('admin/auth/login', 'Admin\AuthController@login')->name('admin.auth.login');
Route::post('admin/auth/check_login', 'Admin\AuthController@check_login')->name('admin.auth.check_login');

Route::group(['prefix' => '', 'namespace' => 'Home'], function(){
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/'.key_name('about'), 'HomeController@about')->name('home.about');
    Route::get('/'.key_name('service'), 'HomeController@service')->name('home.service');
    Route::get('/'.key_name('service').'/{slug}', 'HomeController@serviceDetail')->name('home.serviceDetail');
    Route::get('/'.key_name('contact'), 'HomeController@contact')->name('home.contact');
    Route::get('/'.key_name('staff'), 'HomeController@staff')->name('home.staff');
    Route::post('/postContact', 'HomeController@postContact')->name('home.postContact');
    Route::get('/'.key_name('product'), 'HomeController@product')->name('home.product');
    Route::get('/'.key_name('product').'/{slug}', 'HomeController@productDetail')->name('home.productDetail');
    Route::get('/'.key_name('blog'), 'HomeController@blog')->name('home.blog');
    Route::get('/'.key_name('blog').'/{slug}', 'HomeController@blogDetail')->name('home.blogDetail');

});
Route::group(['prefix' => 'admin', 'namespace' =>'Admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('auth/logout', 'AuthController@logout')->name('admin.auth.logout');
    Route::get('/contact.changeStatus', 'ContactController@changeStatus')->name('contact.changeStatus');
    Route::resources([
        'contact' => 'ContactController',
        'auth' => 'AuthController',
        'config' => 'ConfigController',
    ]);
    Route::get('/file', 'AdminController@file')->name('admin.file');
    Route::resource('/category','CategoryController');
    Route::get('/categoryAjax','CategoryController@indexAjax')->name('category.indexAjax');
    Route::resource('/content','ContentController');
    Route::get('/contentAjax','ContentController@indexAjax')->name('content.indexAjax');
    Route::resource('/image','ImageController');
    Route::get('/imageAjax','ImageController@indexAjax')->name('image.indexAjax');
    Route::resource('/config','ConfigController');
    Route::get('/configAjax','ConfigController@indexAjax')->name('config.indexAjax');
});
