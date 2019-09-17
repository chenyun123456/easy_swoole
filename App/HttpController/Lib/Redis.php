<?php


namespace App\HttpController\Lib;
use EasySwoole\Component\Singleton;
class Redis
{
    use Singleton;
    public $redis='';
    private function __construct()
    {
        if(!extension_loaded('redis')){
            throw new \Exception('redis.so not exit');
        }
        try{
            $this->redis=new \Redis();
            $result = $this->redis->connect('127.0.0.1',6379,3);
        } catch (\Exception $e){
            throw new \Exception('redis server exception');
        }
        if($result == false){
            throw new \Exception('redis connect failed');
        }
    }
    public function getValue($key){
        if(empty($key)){
            return '';
        }
        return $this->redis->get($key);
    }

}