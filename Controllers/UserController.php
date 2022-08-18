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
        return display(302, $users);
    }

    public function show($id) {
        $user = (array)User::find($id);
        if (empty($user)) {
            return display(404, [
                "message" => "No user with the id of '{$id}' was found"
            ]);
        }

        return display(302, $user);
    }
    public function create() {


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
            return display(400, $data);
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
        return display(200, $data);
    }


    public function update() {

        $id = $this->request()->form('id');
        //validate the input
        $this->request()->validate($_POST, [
            'id' => 'required'
        ]);
        if (!empty(Request::$errors)) {
            $data["status"] = "fail";
            $data["errors"] = Request::$errors;
            return display(400, $data);
        }

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


        return display(200, [
            "message" => "User {$id} has been updated"
        ]);
    }
    public function delete() {
        $id = $this->request()->form('id');

        //validate the input
        $this->request()->validate($_POST, [
            'id' => 'required'
        ]);

        if (!empty(Request::$errors)) {
            $data["status"] = "fail";
            $data["errors"] = Request::$errors;
            return display(400, $data);
        }

        if(!User::delete('id', $id)){
            $data["status"] = "fail";
            $data["errors"] = "Something has happened & coould not delete user";
            return display(500, $data);  
        }

        return display(200, [
            "message" => "User {$id} has been deleted"
        ]);
    }
}
