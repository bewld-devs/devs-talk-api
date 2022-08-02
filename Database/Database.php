<?php

namespace DevsTalk\Database;

class Database {
    protected $connection = null;

    public function __construct() {
        try {
            /* fall back code ie the config is absent
            return new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);*/

            //Here you return the credentials stored in the config file
            $this->connection =  new \PDO("sqlite:" . DB_PATH);
        } catch (\PDOException $e) {
            //if anything happens throw an error
            echo $e->getMessage(), 'here';
        }
    }

    public function select($query = "", $params = []) {
        try {
            $stmt = $this->executeStatement($query, $params);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
        return false;
    }

    private function executeStatement($query = "", $params = []) {

  
        try {
            $stmt = $this->connection->prepare($query);
           
            if ($stmt === false) {
                throw new \Exception("Unable to do prepared statement: " . $query);
            }

            // if ($params) {
            //     $stmt->bindParam($params[0], $params[1]);
            // }
           
            $stmt->execute();
            return $stmt;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
