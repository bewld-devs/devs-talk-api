<?php

namespace DevsTalk\Controllers;

use DevsTalk\Core\Mantle\Auth;
use DevsTalk\Core\Mantle\Request;

class AuthController extends Controller {
    public function signin() {

        $this->request()->validate($_POST, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            $data["status"] = "fail";
            $data["errors"] = Request::$errors;
            return display(400, $data);
        }

        Auth::login($this->request()->form('username'), $this->request()->form('password'));
    }

    public function signout() {
       //TO DO
    }
}
