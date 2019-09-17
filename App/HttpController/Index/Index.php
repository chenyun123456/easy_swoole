<?php
namespace App\HttpController\Index;

use App\HttpController\Lib\Redis;
use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Request;
use EasySwoole\Mysqli\Config;
use EasySwoole\Mysqli\Mysqli;

/**
 * Class Hello
 * @package App\HttpController
 */
class Index extends Controller
{

    public function index()
    {
        $data['message']='aaaa';
        $data['xxxx']='xxxx';
        $this->writeJson(200,'success',$data);
    }

    public function test(){
        $conf = new Config(\EasySwoole\EasySwoole\Config::getInstance()->getConf('MYSQL'));
        $db = new Mysqli($conf);
        $data = $db->get('users');//获.0.00取一个表的数据
        return $this->writeJson(200,'success',$data);
    }
    public function getNewRedis(){
        $test = Redis::getInstance()->getValue('test');
        //$test=$redis->getValue('test');
        echo $test;
    }
    public function getconf(){
        $result = \Yaconf::get('redis');
        return $this->writeJson(200,'success',$result);
    }


}