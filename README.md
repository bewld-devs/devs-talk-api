# DevTalk API


## Still in dev (Will reformat) promise ;)


### To run you need 
 - PHPv7.0 +
 - Composer 
 - Enable sqlite extension in php.ini
 - A web server, any will do or just use the built-in in php

 Forn non-php devs, i'd advise you to use [laragon](https://laragon.org/) as it comes pre-bundles with the above requirements

 After you have fullfilled all the requiremts mentioned above
  - clone the repo
  - open terminal
  - `cd devs-talk-api`
  - `composer install`

And vhalla! just vist /api/v1/users 

 ### Endpoints

 #### For now the only endpoints that work are 
  - /api/v1/users  => Gets all the users
  - /api/v1/users/{id} => Gets a specific user in regard to their ID


## Issues
  For any issues, please feel free to ask [@munenepeter](https://github.com/munenepeter)
