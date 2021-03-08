<?php
namespace IMooc;
interface IDatabase{
    //适配器模式
    function connect($host,$user,$password,$dbname);
    function query($sql);
    function close();
}
?>