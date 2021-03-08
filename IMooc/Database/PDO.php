<?php
namespace IMooc\Database;
use IMooc\IDatabase;

class PDO implements IDatabase{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $query = $this->conn->query($sql);
        return $query;
    }

    public function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}
