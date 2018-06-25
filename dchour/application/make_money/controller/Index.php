<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/25 0025
 * Time: 15:51
 */
namespace app\make_money\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}