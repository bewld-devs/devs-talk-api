# DevsTalk API


## in contanst development


### To run you need 
 - PHPv7.0 +
 - Composer 
 - Enable sqlite extension in [php.ini](https://www.plus2net.com/php_tutorial/sqlite-support.php)
 - A web server, any will do or just use the built-in in php

 For non-php devs, i'd advise you to use [laragon](https://laragon.org/) as it comes pre-bundled with the above requirements

 After you have fullfilled all the requiremts mentioned above
  - clone the repo
  - open terminal
  - `cd devs-talk-api`
  - `composer install`
  - Run your server or built in `php -S localhost:8080`

And vhalla! just visit `/` or any of the listed endpoints 

## Special Endpoints
| API                         | Description                 |
|-----------------------------|------------------------------------------------------------------------------------|
| `GET /api/test` | Returns a demo web page that partialy consumes the API |
| `GET /api/logs` | Returns a log page detailing all the logs of the application for debugging |

## Current GET Endpoints

| API                         | Description                 |
|-----------------------------|------------------------------------------------------------------------------------|
| `GET /`                 | Returns a welcome message & confirms that everything is working   |
| `GET /api/v1`           | Returns a welcome message & confirms that everything is working   |
| `GET /api/v1/users`     | Returns all the users available.                                  |
| `GET /api/v1/users/{id}`| Returns a specific user in regard to their ID.                    |
| `GET /api/v1/posts`     | Returns all the posts available & their associated author.        |
| `GET /api/v1/posts/{id}`| Returns a specific post in regard to its ID.                      |

## Current POST Endpoints

| API                         | Description                                                                        |
|-----------------------------|------------------------------------------------------------------------------------|
| `POST /api/v1/user/signin` | Authenticates a user                                 |
| `POST /api/v1/user/create` | Create a new user, returns an object.                |
| `POST /api/v1/user/delete` | Delete a user, returns an object.                    |


The data returned from these APIs is a JSON array of JSON objects.
For the POST end point to work, the following is needed



#### POST Endpoint #1 `/signin`

| Field Name | Type     | Description                                                                                              |
|------------|----------|----------------------------------------------------------------------------------------------------------|
| `username` | `string` | The name of the  user to be autheticated  |
| `password` | `string` | The password to be associated with the new user. |



#### POST Endpoint #2 `/create`

| Field Name | Type     | Description                                                                                              |
|------------|----------|----------------------------------------------------------------------------------------------------------|
| `username` | `string` | The name of the new user to be created            |
| `password` | `string` | The password to be associated with the new user.  |
| `email`    | `string` | The email to be associated with the new user.     |

#### POST Endpoint #3 `/delete`

| Field Name | Type     | Description                                                                                              |
|------------|----------|----------------------------------------------------------------------------------------------------------|
| `id`       | `string` | The id of the user to be deleted                                                           |
## Database

For now because we are in the intial stages of dev, i am using a [sqlite](https://www.sqlite.org/index.html) db with has only table for now that is users & posts


## Issues
  For any issues, please feel free to ask [@munenepeter](https://github.com/munenepeter)
