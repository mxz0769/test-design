<?php
namespace IMooc;

class Database{
    protected static $db;
    private function __construct(){

    }

    static function getInstance(){
        //单例模式
        if(!self::$db){
            self::$db = new self();
        }
        return self::$db;
    }

    public function where(){
        return $this;
    }

    public function order(){
        return $this;
    }
}
?>
