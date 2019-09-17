<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Component\Di;
/**
 * Class Hello
 * @package App\HttpController
 */
class Hello extends Controller
{

    public function index()
    {
        echo "hello world";
        // TODO: Implement index() method.
        $this->response()->write('hello world');
    }

}