<?php
namespace IMooc;
class Loader{
    static function autoload($class){
//        var_dump(BASEDIR.'/'.str_replace("\\","/",$class).".php");
        include BASEDIR.'/'.str_replace("\\","/",$class).".php";
    }
}
?>
