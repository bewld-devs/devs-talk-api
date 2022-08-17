<?php

namespace DevsTalk\Controllers;

use DevsTalk\Core\Mantle\Auth;
use DevsTalk\Core\Mantle\Request;
use DevsTalk\Core\Mantle\Session;

class AuthController extends Controller {
    public function signin() {

        $this->request()->validate($_POST, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            $data["status"] = "fail";
            $data["errors"] = Request::$errors;
            return display($data);
        }

        Auth::login($this->request()->form('username'), $this->request()->form('password'));
    }

    public function signout() {
        Auth::logout(Session::get('user'));
        redirect('/');
    }
}
