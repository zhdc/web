<?php
/**
 * Created by PhpStorm.
 * User: zhudechao
 * Date: 2018/8/26
 * Time: 下午4:30
 */
namespace zhdc\param;
class Param
{
    /**
     * 判断是不是全字母
     * @param $value
     * @return bool
     */
    public static function check_alpha($value)
    {
        $rv = preg_match("/^[a-zA-Z]*$/", strval($value));
        if ($rv == 0) {
            return false;
        }
        return true;
    }
}