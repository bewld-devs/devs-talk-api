# DevTalk API


## Still in dev (Will reformat) very soon promise ;)


### To run you need 
 - PHPv7.0 +
 - Composer 
 - Enable sqlite extension in php.ini
 - A web server, any will do or just use the built-in in php

 For non-php devs, i'd advise you to use [laragon](https://laragon.org/) as it comes pre-bundled with the above requirements

 After you have fullfilled all the requiremts mentioned above
  - clone the repo
  - open terminal
  - `cd devs-talk-api`
  - `composer install`
  - Run your server or built in `php -S localhost:8080`

And vhalla! just visit /api/v1/users 

## Current GET Endpoints

| API                         | Description                                                                        |
|-----------------------------|------------------------------------------------------------------------------------|
| `GET /api/v1/users` | Returns all the users available.            |
| `GET /api/v1/users/{id}`         | Returns a specific user in regard to their ID.                     |

## Current POST Endpoints

| API                         | Description                                                                        |
|-----------------------------|------------------------------------------------------------------------------------|
| `POST /api/v1/user/create` | Create a new user, returns an object.            |
| `POST /api/v1/user/signin`         | Authenticates a user                     |

The data returned from these APIs is a JSON array of JSON objects.
For the POST end point to work, the following is needed

#### POST Endpoint #1 `/create`

| Field Name | Type     | Description                                                                                              |
|------------|----------|----------------------------------------------------------------------------------------------------------|
| `username`       | `string` | The name of the new user to be created                                                           |
| `password`     | `string` | The password to be associated with the new user.                                                  |
| `email`    | `string` | The email to be associated with the new user. |

#### POST Endpoint #1 `/signin`

| Field Name | Type     | Description                                                                                              |
|------------|----------|----------------------------------------------------------------------------------------------------------|
| `username`       | `string` | The name of the  user to be autheticated                                                           |
| `password`     | `string` | The password to be associated with the new user. 
## Issues
  For any issues, please feel free to ask [@munenepeter](https://github.com/munenepeter)
