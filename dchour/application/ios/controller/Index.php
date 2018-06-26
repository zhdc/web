<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/26 0026
 * Time: 16:32
 */
namespace app\ios\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}