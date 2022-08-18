<?php

namespace DevsTalk\Controllers;

use DevsTalk\Models\User;
use DevsTalk\Core\Mantle\Request;

class Controller {

   
  
    public function request(){
        return (new Request);
     }
    public function upload(array $file, string $location, int $max_size, array $mime_types) {
        return $this->request()->upload($file, $location, $max_size, $mime_types);
    }
    public function owner($user_id) {
        $user = User::where(['username'], ['id', $user_id])[0];
        return $user->username;
    }

}
