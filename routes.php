<?php
//get routes

$router->get('', 'ApiController@index');
$router->get('api/v1', 'ApiController@index');
$router->get('api/v1/users', 'UserController@index');
$router->get('api/v1/users/{id}', 'UserController@show');

$router->post('api/v1/user/signin', 'AuthController@signin');
$router->post('api/v1/user/create', 'UserController@create');
$router->post('api/v1/user/delete', 'UserController@delete');