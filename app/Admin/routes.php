<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('projects', ProjectController::class);

    $router->resource('categories', CategoryController::class);

    $router->resource('stories', StoryController::class);

    // 视野观点
    $router->resource('opinions', OpinionController::class);

});
