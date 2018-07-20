<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/20 0020
 * Time: 11:51
 */
namespace app\about\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}