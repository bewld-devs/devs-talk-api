<?php

namespace DevsTalk\Core\Database\Migrations;

use Illuminate\Database\Capsule\Manager;

class UserMigration {
    public function __construct() {
        Manager::schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
}
