<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/7/5
 * Time: 下午10:30
 */
namespace app\test\controller;
use Faker\Factory;
use Faker\Provider\Base;
use Faker\Provider\Internet;
use think\Controller;
use think\facade\Hook;
use zhdc\image\ImgBase64;
use zhdc\param\Param;

//require dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/fzaninotto/faker/src/autoload.php';

class Index extends Controller
{

    public function index()
    {
        $str = ImgBase64::base64EncodeImage('/Users/zhudechao/wwwroot/code/dchour/public/static/images/t00.jpg');
        $ret = ImgBase64::base64_image_content($str,'/Users/zhudechao/wwwroot/code/dchour/public/test');
        var_dump($ret);
        die();
    }

    public function WSTDelDir($dirpath)
    {
        $dh = opendir($dirpath);
        while (($file = readdir($dh)) != false){
            if($file != "." && $file != ".."){
                $fullpath = $dirpath."/".$file;
                if(!is_dir($fullpath)){
                    unlink($fullpath);
                }else{
                    $this->WSTDelDir($fullpath);
                    rmdir($fullpath);
                }
            }
        }
        closedir($dh);
        $isEmpty = 1;
        $dh = opendir($dirpath);
        while (($file = readdir($dh)) != false){
            if($file != "." && $file != ".."){
                $isEmpty = 0;
                break;
            }
        }
        return $isEmpty;
    }
}