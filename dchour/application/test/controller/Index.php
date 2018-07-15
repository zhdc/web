<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/5
 * Time: 下午10:30
 */
namespace app\test\controller;
use think\Controller;
use think\facade\Hook;

class Index extends Controller
{

    public function index()
    {
        $instance = Singleton::getInstance();
        $ret = $instance->test();
        return json($ret);
    }
}