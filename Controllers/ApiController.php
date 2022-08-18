<?php

namespace DevsTalk\Controllers;

use DevsTalk\Models\Category;
use DevsTalk\Models\Product;  

class ApiController extends Controller{
  public function index(){
    return display(200, [
        "status" => "ok",
        "message" => "Welcome to Devs Talk API, this is a test that it works"
    ]);
  }
}