<?php

namespace DevsTalk\Models;

use DevsTalk\Database\Database;

class User extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM users ORDER BY id ASC LIMIT ?", ["i", $limit]);
    }
}