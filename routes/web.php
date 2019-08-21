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

// 关于我们
Route::get('/about', 'AboutController@index')->name('web.about');


// 服务能力首页
Route::get('/service', 'ServiceController@index')->name('web.service.index');
// 服务能力详情页
Route::get('/service/{id}', 'ServiceController@show')->name('web.service.show');


// 作业案例首页
Route::get('/project', 'ProjectController@index')->name('web.project.index');
// 作业案例列表页
Route::get('/project-list/{id}', 'ProjectController@list')->name('web.project.list');
// 作业案例详情页
Route::get('/project/{id}', 'ProjectController@show')->name('web.project.show');


// 作业故事首页
Route::get('/stroy', 'StoryController@index')->name('web.stroy.index');
// 作业故事列表页
Route::get('/stroy-list/{type}', 'StoryController@list')->name('web.story.list');
// 作业故事详情页
Route::get('/story/{id}', 'StoryController@show')->name('web.story.show');


// 互动平台首页
Route::get('/platform', 'PlatformController@index')->name('web.platform.index');
// 品牌问题咨询
Route::get('/platform/brand-consult', 'PlatformController@brandConsult')->name('web.platform.brand-consult');
// 互动平台详情页
Route::get('/platform/{id}', 'PlatformController@show')->name('web.platform.show');






