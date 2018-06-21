<?php
namespace app\index\controller;


use think\Config;

class Index
{
    public function index()
    {
<<<<<<< HEAD
        return "ThinkPHP 5.1.16";
=======
        echo \config('app_name');
>>>>>>> 010a10360a08e0f932ace339bdcca7ad19fc7187
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
