<?php
namespace DevsTalk\Models;
use DevsTalk\Models\User;

 class Post extends \Illuminate\Database\Eloquent\Model{

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 }