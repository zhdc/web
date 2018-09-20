<?php
namespace app\index\controller;


use think\Config;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    //js将图片转化为base64
    public function test1()
    {
        return $this->fetch();
    }
}
