<?php

$router = app('router');

$router->get('/', function () {
    return view('all-import::index');
});