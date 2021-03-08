<?php
/**
 * 工厂模式
 */
namespace IMooc;
use IMooc\Database\MySQLi;

class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }

    static function createUser($id){

        $key = 'user_'.$id;
        $user = Register::get($key);
        if(!$user){
            $user = new User($id);
            Register::set($key,$user);
        }
        return $user;
    }

    static function getDatabase(){
        $db = new MySQLi();
        $db->connect('localhost','root','','imooc');
        return $db;
    }
}
?>
