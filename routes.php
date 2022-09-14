<?php
//get routes

$router->get('', 'ApiController@index');
$router->get('api/v1', 'ApiController@index');

//users
$router->get('api/v1/users', 'UserController@index');
$router->get('api/v1/users/{id}', 'UserController@show');

$router->post('api/v1/user/signin', 'AuthController@signin');
$router->post('api/v1/user/create', 'UserController@create');
$router->post('api/v1/user/delete', 'UserController@delete');

//posts
$router->get('api/v1/posts', 'PostController@index');
$router->get('api/v1/posts/{id}', 'PostController@show');

//test page

$router->get('api/test', function () {
    return view('test');
});

//logs
$router->get('api/logs', 'SystemController@index');
