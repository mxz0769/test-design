<?php
namespace IMooc\Database;
use IMooc\IDatabase;

class MySQLi implements IDatabase {
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$password,$dbname);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}
