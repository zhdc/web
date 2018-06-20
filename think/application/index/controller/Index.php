<?php
namespace app\index\controller;


use think\Config;

class Index
{
    public function index()
    {
        echo \config('app_name');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
