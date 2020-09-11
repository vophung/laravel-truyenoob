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

Route::get('trangchu','Manage\ThemesController@trangchu')->name('trangchu');
Route::get('danh-sach/truyen-moi','Manage\ThemesController@truyenmoi')->name('truyenmoi');
Route::get('danh-sach/truyen-hoan-thanh','Manage\ThemesController@truyenfull')->name('truyenfull');
Route::get('duongdantentruyen/{story}','Manage\ThemesController@notruyen')->name('tencuatruyen');
Route::get('duongdantentruyen/{story}/{chuong}','Manage\ThemesController@chuong')->name('chuong');
Route::get('parent-category/{category}','Manage\ThemesController@parent_category')->name('parent-category');
Route::get('parent-author/{author}','Manage\ThemesController@parent_author')->name('parent-author');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('realtime','Manage\ThemesController@realtime')->name('realtime');
// Route::post('realltime','Manage\ThemesController@real')->name('real');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Manage')->prefix('manage')->name('manage.')->group(function(){
    // Route::resource('/user', 'UsersController',['except' => ['create','show','store']]);
    Route::get('home','ManageController@index')->name('home');
    Route::prefix('user')->name('user.')->middleware('can:admin-edit-delete')->group(function(){
        Route::get('','UsersController@index')->name('index');
        Route::get('role','UsersController@create')->name('create');
        Route::post('store','UsersController@store')->name('store');
        Route::get('{user}/edit','UsersController@edit')->name('edit');
        Route::put('{user}','UsersController@update')->name('update');
        Route::get('{user}','UsersController@destroy')->name('destroy');
    });
    Route::prefix('category')->name('category.')->middleware('can:admin')->group(function(){
        Route::get('index','CategoryController@index')->name('index');
        // Route::get('create','CategoryController@create')->name('create');
        Route::post('store','CategoryController@store')->name('store');
        Route::post('edit','CategoryController@update')->name('update');
        Route::post('delete','CategoryController@destroy')->name('destroy');
        // Route::get('{category}/edit','CategoryController@edit')->name('edit');
        // Route::put('{category}','CategoryController@update')->name('update');
        // Route::get('{category}','CategoryController@destroy')->name('destroy');
    });
    Route::prefix('author')->name('author.')->middleware('can:admin')->group(function(){
        Route::get('index','AuthorController@index')->name('index');
        // Route::get('create','AuthorController@create')->name('create');
        Route::post('store','AuthorController@store')->name('store');
        Route::post('edit','AuthorController@update')->name('update');
        Route::post('delete','AuthorController@destroy')->name('destroy');
        // Route::get('{author}/edit','AuthorController@edit')->name('edit');
        // Route::put('{author}','AuthorController@update')->name('update');
        // Route::get('{author}','AuthorController@destroy')->name('destroy');
    });
    Route::prefix('story')->name('story.')->middleware('can:admin-writer-edit-delete')->group(function(){
        Route::get('index','StoryController@index')->name('index');
        Route::get('create','StoryController@create')->name('create');
        Route::post('store','StoryController@store')->name('store');
        Route::get('{story}/edit','StoryController@edit')->name('edit');
        Route::put('{story}','StoryController@update')->name('update');
        Route::get('{story}','StoryController@destroy')->name('destroy');

        Route::prefix('chapter')->name('chapter.')->group(function(){
            Route::get('show','ChapterController@show')->name('show');
            Route::get('index/{story}','ChapterController@index')->name('index');
            Route::get('create/{story}','ChapterController@create')->name('create');
            Route::post('store/{story}','ChapterController@store')->name('store');
            Route::get('edit/{chapter}/{story}','ChapterController@edit')->name('edit');
            Route::put('update/{chapter}/{story}','ChapterController@update')->name('update');
            Route::get('destroy/{chapter}','ChapterController@destroy')->name('destroy');
        });
    });
    Route::prefix('profile')->name('profile.')->group(function(){
        Route::get('index','ProfileController@index')->name('index');
        Route::post('updatesettings','ProfileController@updatesettings')->name('updatesettings');
        Route::post('updatepassword','ProfileController@updatepassword')->name('updatepassword');
        Route::post('updateimages','ProfileController@updateimages')->name('updateimages');
        Route::post('storeimages','ProfileController@storeimages')->name('storeimages');
    });
});
Route::any('{all?}','HomeController@index')->where('all','(.*)');
