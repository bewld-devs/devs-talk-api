<?php

namespace DevsTalk\Core\Mantle;

use DevsTalk\Models\User;
use DevsTalk\Core\Mantle\Session;

class Auth {

    public static function login(String $username, String $password) {

        $data = [];
        $password = md5($password);
        $user =  User::query("select id, username, password from users where username = \"$username\"");

        if (empty($user)) {
            $data["status"] = "fail";
            logger("Info: Login: No account with {$username} username");
            $data["message"] = "There is no user with {$username}";
            return display(400, $data);
        }
        $user = (object)$user[0];

        if ($password === $user->password) {
            logger("Info: Login: Logged in {$username}");
        
            //Todo Implement Session tokens  
            $data["status"] = "success";
            $data["message"] = "{$username} has logged in";
            return display(200, $data);
        } else {
            logger("Info: Login: Wrong Credentials");
            $data["status"] = "fail";
            $data["message"] = "Wrong Credentials, Please try again";
            return display(400, $data);
        }
    }
    public static function logout(String $user) {
     //To Do
     
    }
}
