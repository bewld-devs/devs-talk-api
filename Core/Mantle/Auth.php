<?php

namespace DevsTalk\Core\Mantle;

use DevsTalk\Models\User; 
use DevsTalk\Core\Mantle\Session;

class Auth {

    public static function login(String $username, String $password) {

      
        $user =  User::query("select id, first_name, last_name,  from users where first_name = \"$username\"");

        if (empty($user)) {
            logger("Info: Login: No account with {$username} username");
            echo json_encode("There is no user with {$username}");
            return;
        }
        $user = (object)$user[0];

        if ($password === $user->password) {
            logger("Info: Login: Logged in {$username}");
            Session::make('loggedIn', true);
            Session::make('user_id', $user->id);
            Session::make('user', $user->username);
            Session::make('email', $user->email);
            Session::make('role', $user->role);
            //Todo Implement Session tokens  
           
            echo json_encode("logged_in"); 
            return;
        } else {
            logger("Info: Login: Wrong Credentials");
            echo json_encode("Wrong credentials, Please try again!");
            return;
        }
    }
    public static function logout(String $user) {
        logger("Info: Login: logged out $user");
        Session::unset($user);
        Session::make('loggedIn', false);
        Session::destroy();
    }
}
