<?php

/** @var \Illuminate\Routing\Route $router */
$router = app('router');

$router->get('/', function () {
    return view('all-import::index');
});