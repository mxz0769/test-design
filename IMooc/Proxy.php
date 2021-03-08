<?php
namespace IMooc;
class Proxy implements \IMooc\IUserProxy{
    // 代理模式
    public function getUserName($id)
    {
        // TODO: Implement getUserName() method.
        $db = Factory::getDatabase();
        $db->query("select * from user where id = $id");
    }

    public function setUserName($id,$name)
    {
        // TODO: Implement setUserName() method.
        $db = Factory::getDatabase();
        $db->query("update user set name = $name where id = $id");
    }
}
