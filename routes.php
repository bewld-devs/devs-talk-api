<?php
//get routes

$router->get('api/v1', 'ApiController@index');
$router->get('api/v1/users', 'UserController@index');
$router->get('api/v1/users/{id}', 'UserController@show');

$router->post('api/v1/users/signin', 'AuthController@signin');
$router->post('api/v1/users/create', 'UserController@create');