<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/15
 * Time: 上午10:50
 */
namespace app\php\controller;
use think\Controller;

class Fun extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    //时间函数处理页面
    public function dateTimeDisplay()
    {
        return $this->fetch("datatime");
    }
}