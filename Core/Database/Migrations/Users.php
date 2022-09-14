<?php

namespace DevsTalk\Core\Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;


class Users {
    public function __construct() {
        try {
            Capsule::schema()->create('usersu', function ($table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->timestamps();
            });
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
