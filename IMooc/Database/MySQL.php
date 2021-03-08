<?php
namespace IMooc\Database;
use IMooc\IDatabase;

class MySQL implements IDatabase {
    protected $conn;

    public function connect()
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $query = mysql_query($sql,$this->conn);
        return $query;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}
?>
