<?php

define("BASEDIR",__DIR__);
require BASEDIR."/IMooc/Loader.php";

spl_autoload_register("\\IMooc\\Loader::autoload");

//App\Controller\Home\index::test();
//echo PHP_EOL;
//IMooc\Database::test();

//$db = \IMooc\Database::getInstance();
//$db = IMooc\Factory::createDatabase();
//$db = \IMooc\Register::get('db1');
//var_dump($db);

//$db1 = new \IMooc\Database();

/*
class Page{
    protected $strategy;
    public function index(){
        $this->strategy->showAd();
        echo PHP_EOL;
        $this->strategy->showCategory();
    }

    public function setStrategy(\IMooc\UserStrategy $strategy){
        $this->strategy = $strategy;
    }
}

$page = new Page();
if(isset($_GET['female'])){
    $strategy = new \IMooc\FemaleUserStrategy();

}else{
    $strategy = new \IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();
*/


/**
 * 数据对象映射模式
class Page{
    public function index(){
        $user = \IMooc\Factory::createUser(1);

        $user->name = 'zhangsan';
        $this->test();
    }

    public function test(){
        $user = \IMooc\Factory::createUser(1);
        $user->mobile = '13511123333';
//        $user->addtime = date("Y-m-d H:i:s");
    }
}
$page = new Page();
$page->index();
 *
 * */

/**
 * 观察者模式

//观察者1
class observer1 implements \IMooc\Observer{
    public function update()
    {
        // TODO: Implement update() method.
        echo '观察者1更新';
    }
}

//观察者2
class observer2 implements \IMooc\Observer{
    public function update()
    {
        // TODO: Implement update() method.
        echo '观察者2更新';
    }
}

class Event extends \IMooc\EventGenerator {
    public function trigger(){
//        echo 'event';
        $this->notify();
    }
}
$event = new Event;
$event->addObserver(new observer1);
$event->addObserver(new observer2);
$event->trigger();
 *
 */

/*
 ** 代理模式
$proxy = new \IMooc\Proxy();
$proxy->getUserName(1);
$proxy->setUserName(1,'zhaoliu');
 */

$config = new \IMooc\Config(__DIR__.'/configs');
var_dump($config['controller']);

echo '11111111111';