<?php
namespace app\index\controller;


use think\Config;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return "ThinkPHP 5.1.16";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function php()
    {
        return $this->fetch();
    }
}
