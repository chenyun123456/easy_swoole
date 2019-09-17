<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/8/15
 * Time: 上午10:39
 */

namespace App\HttpController\Index;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class Router extends AbstractRouter
{
  function initialize(RouteCollector $routeCollector)
      {
        $routeCollector->get('/index', '/Index/index/index');
          $routeCollector->get('/dbTest', '/Index/index/test');
        //$routeCollector->get('/test', '/Index/index/test');
      }
    }