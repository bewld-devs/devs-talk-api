<?php

namespace DevsTalk\Controllers;

use DevsTalk\Models\User;
use DevsTalk\Core\Mantle\Request;

class UserController extends Controller {

    public function __construct() {
       // $this->middleware('auth');
    }

    public function index() {
        $users =  User::all();
        return display($users);
    }

    public function show($id) {
        $user = User::find($id);

        return display((array)$user);
    }
    public function create() {

        //$this->middleware('admin');
        $data = [];
        //validate the input
        $this->request()->validate($_POST, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        if (!empty(Request::$errors)) {
            $data["status"] = "fail";
            $data["errors"] = Request::$errors;
            return display($data);
        }
        //create user
        User::create([
            'username' => $this->request()->form('username'),
            'email' => $this->request()->form('email'),
            'password' => $this->request()->form('password'),
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time())
        ]);
        //notify    
        $data["status"] = "success";
        $data["message"] = "Successfully created a new user";

        //redirect back
        return display($data);
    }

    
    public function edit($id) {
        $product = User::find($id);

        
    }
    public function update() {

        $id = $this->request()->form('id');
        //validate the input
        $this->request()->validate($_POST, [
            'username' => 'required'
        ]);


        $username = $this->request()->form('username');
        $email = $this->request()->form('email');
        $role = $this->request()->form('password');
        $updated_at = date('Y-m-d H:i:s', time());
        //create product
        User::update(
            "
            `username` = '$username',
            `email` = '$email', 
            `role` = '$role',  
            `updated_at` = '$updated_at' 
            ",
            'id',
            $id
        );

        notify("User {$id} has been updated");

        //redirect back
        return redirectback();
    }
    public function delete() {
        $id = $this->request()->form('id');

        User::delete('id', $id);

        notify(" User {$id} has been deleted");
        return redirectback();
    }
}
