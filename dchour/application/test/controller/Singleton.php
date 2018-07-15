<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/7
 * Time: 下午7:39
 */

/**
 * 单例的三个特点
 * 1:一个类只有一个实例
 * 2:它必须自行创建这个实例
 * 3:必须自行向整个系统提供这个实例
 */
namespace app\test\controller;
class Singleton
{
    private static $_instance = NULL;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Singleton();
        }
        return self::$_instance;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function test()
    {
        return "singleton test";
    }
}