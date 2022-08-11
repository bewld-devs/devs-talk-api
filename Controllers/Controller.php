<?php

namespace DevsTalk\Controllers;

use DevsTalk\Core\Mantle\Middleware;
use DevsTalk\Core\Mantle\Request;
use DevsTalk\Core\Mantle\Paginator;

class Controller {

   
    public function middleware($middleware){
       return (new Middleware)->middleware($middleware);
    }
    public function request(){
        return (new Request);
     }
    public function upload(array $file, string $location, int $max_size, array $mime_types) {
        return $this->request()->upload($file, $location, $max_size, $mime_types);
    }
    public function paginate(array $data, $per_page) {
        return Paginator::paginate($data, $per_page);
    }

}
