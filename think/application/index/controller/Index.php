<?php
namespace app\index\controller;


use think\Config;

class Index
{
    public function index()
    {
        return "ThinkPHP 5.1.16";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
