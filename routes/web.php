<?php

/** @var \Illuminate\Routing\Route $router */
$router = app('router');

$router->get('/', [
    'as'   => 'index',
    'uses' => 'MainController@index',
]);

$router->post('/upload', [
    'as'   => 'upload',
    'uses' => 'UploadController@upload',
]);

$router->get('/select-table', [
    'as'   => 'select-table',
    'uses' => 'FileController@selectTable',
]);

$router->get('/{file}', [
    'as'   => 'file-details',
    'uses' => 'FileController@index',
]);

$router->post('/insert', [
    'as'   => 'insert',
    'uses' => 'FileController@insert',
]);

$router->group(['prefix' => 'assets'], function ($router) {
    $filePattern = '^([a-z0-9_\-\.]+)$';
    
    $router->get('fonts/{_file}', [
        'as'   => 'font',
        'uses' => 'AssetsController@font',
    ])->where('_file', $filePattern);
    
    $router->get('img/{_file}', [
        'as'   => 'image',
        'uses' => 'AssetsController@image',
    ])->where('_file', $filePattern);
    
    $router->get('{_file}', [
        'as'   => 'file',
        'uses' => 'AssetsController@file',
    ])->where('_file', $filePattern);
});