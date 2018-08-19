<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/28
 * Time: 下午5:55
 */
namespace app\php\controller;
use think\Controller;

class Method extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}