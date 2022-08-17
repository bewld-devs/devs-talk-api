<?php

namespace DevsTalk\Controllers;

use DevsTalk\Core\Mantle\Auth;
use DevsTalk\Core\Mantle\Request;
use DevsTalk\Core\Mantle\Session;

class AuthController extends Controller {
    public function signin() {

        $this->request()->validate($_POST, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            return display([
                'errors' => Request::$errors
            ]);
        }

        Auth::login($this->request()->form('first_name'), $this->request()->form('last_name'));
    }

    public function signout() {
        Auth::logout(Session::get('user'));
        redirect('/');
    }
}
