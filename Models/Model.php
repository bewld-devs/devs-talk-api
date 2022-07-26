<?php
namespace DevsTalk\Models;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class Model{
    private static $database;
    private static $dbname = 'users';
        
    public function __construct() {
        $acc = ServiceAccount::fromJsonFile(__DIR__ . '/secret/php-firebase-7f39e-c654ccd32aba.json');
        $firebase = (new Factory)->withServiceAccount($acc)->create();
        self::$database = $firebase->getDatabase();
    }
    public static function get(int $key = NULL) {
        if (empty($key) || !isset($key)) {
            return FALSE;
        }
        if (self::$database->getReference(self::$dbname)->getSnapshot()->hasChild($key)) {
            return self::$database->getReference(self::$dbname)->getChild($key)->getValue();
        } else {
            return FALSE;
        }
    }
    public static function insert(array $data) {
        if (empty($data) || !isset($data)) {
            return FALSE;
        }
        foreach ($data as $key => $value) {
            self::$database->getReference()->getChild(self::$dbname)->getChild($key)->set($value);
        }
        return TRUE;
    }
    public static function delete(int $key) {
        if (empty($key) || !isset($key)) {
            return FALSE;
        }
        if (self::$database->getReference(self::$dbname)->getSnapshot()->hasChild($key)) {
            self::$database->getReference(self::$dbname)->getChild($key)->remove();
            return TRUE;
        } else {
            return FALSE;
        }
    }
}