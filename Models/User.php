<?php

namespace DevsTalk\Models;

use DevsTalk\Models\Post;

class User extends \Illuminate\Database\Eloquent\Model {

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
