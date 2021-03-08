<?php
namespace IMooc;
class User{
    protected $db;

    public $name;
    public $mobile;
    public $addtime;
    public function __construct($id) {
        // 数据对象映射模式
        $this->db = new \IMooc\Database\MySQLi();
        $this->db->connect('localhost','root','','imooc');
        $query = $this->db->query("select * from user where id =$id");
        $data = mysqli_fetch_assoc($query);
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->addtime = $data['addtime'];
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->query("update user set name ='{$this->name}',mobile='{$this->mobile}',addtime='{$this->addtime}' where id = 1");
    }
}
?>
