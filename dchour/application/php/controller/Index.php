<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/26 0026
 * Time: 11:54
 */
namespace app\php\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {

        return $this->fetch();
    }
}