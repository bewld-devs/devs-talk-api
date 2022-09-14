<?php

namespace DevsTalk\Controllers;

use DevsTalk\Models\User;
use DevsTalk\Models\Post;
use DevsTalk\Core\Mantle\Request;

class PostController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        $posts = Post::all();
        return display(302, $posts);
    }

    public function show($id) {
        $post = (array)Post::find($id);
        if (empty($post)) {
            return display(404, [
                "message" => "No Post with the id of '{$id}' was found"
            ]);
        }

        return display(302, $post);
    }
    public function create() {


        $data = ["message" => "To be implemented"];
          return display(200, $data);
    }


    public function update() {

        $data = ["message" => "To be implemented"];
        return display(200, $data);
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

        if(!Post::delete('id', $id)){
            $data["status"] = "fail";
            $data["errors"] = "Something has happened & coould not delete Post";
            return display(500, $data);  
        }

        return display(200, [
            "message" => "Post {$id} has been deleted"
        ]);
    }
}
