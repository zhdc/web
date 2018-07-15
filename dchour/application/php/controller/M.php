<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/15
 * Time: 下午5:21
 */
namespace app\php\controller;
use think\Controller;

class M extends Controller
{
    public function singleton()
    {
        return $this->fetch();
    }
}