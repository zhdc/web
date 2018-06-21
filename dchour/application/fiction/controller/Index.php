<?php
/**
 * Created by IntelliJ IDEA.
 * User: zhudechao
 * Date: 2018/6/21
 * Time: 下午8:36
 */
namespace app\fiction\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}