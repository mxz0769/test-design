<?php
namespace IMooc;
class Config implements \ArrayAccess{
    protected $configs = array();
    protected $path;
    public function __construct($path){
        $this->path = $path;
    }
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.

    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        if(empty($this->configs[$offset])){
            $file_path = $this->path.'/'.$offset.'.php';
            $config = require $file_path;
            $this->configs[$offset] = $config;
        }
        return $this->configs[$offset];

    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        $this->configs[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        unset($this->configs[$offset]);
    }
}
