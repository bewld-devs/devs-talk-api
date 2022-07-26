<?php
namespace DevsTalk\Models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Model{
    private  $database;
    private  $dbname = 'users';
        
    public function __construct() {
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/secret/php-firebase-7f39e-c654ccd32aba.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        $this->database = $firebase->getDatabase();
    }
    public  function get(int $key = NULL) {
        if (empty($key) || !isset($key)) {
            return FALSE;
        }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($key)) {
            return $this->database->getReference($this->dbname)->getChild($key)->getValue();
        } else {
            return FALSE;
        }
    }
    public  function insert(array $data) {
        if (empty($data) || !isset($data)) {
            return FALSE;
        }
        foreach ($data as $key => $value) {
            $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }
    public  function delete(int $key) {
        if (empty($key) || !isset($key)) {
            return FALSE;
        }
        if ($this->database->getReference($this->dbname)->getSnapshot()->hasChild($key)) {
            $this->database->getReference($this->dbname)->getChild($key)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
}