<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/6/29
 * Time: 下午9:33
 */
namespace app\hive\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}