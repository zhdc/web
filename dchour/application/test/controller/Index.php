<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/5
 * Time: 下午10:30
 */
namespace app\test\controller;
use think\Controller;
use think\facade\Hook;

class Index extends Controller
{

    public function index()
    {
        $url = "http://php.net/manual/en/langref.php";
        $html = file_get_contents($url);
        $string = strstr($html,'<aside');
        //echo htmlentities($string);exit;
        $lititle = '<li class="">';
        $arrstr = explode($lititle,$string);
        $string = $arrstr[0].$lititle.$arrstr[1]."</ul>".$lititle.$arrstr[2]."</ul></aside>";
        echo $string; //输出结果
        echo "<br/>";
        echo "<br/>";

    }
}