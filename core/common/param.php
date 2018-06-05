<?php
/**
 * 一些基本的参数认证
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/5 0005
 * Time: 10:24
 */

class Param{

    //判断日期时间格式
    public function validateDate($input,$format = null){
        if ($input instanceof DateTimeInterface
            || $input instanceof DateTime) {
            return true;
        }

        if (!is_scalar($input)) {
            return false;
        }

        $inputString = (string) $input;

        if (is_null($format)) {
            return false !== strtotime($inputString);
        }

        $exceptionalFormats = [
            'c' => 'Y-m-d\TH:i:sP',
            'r' => 'D, d M Y H:i:s O',
        ];

        if (in_array($format, array_keys($exceptionalFormats))) {
            $format = $exceptionalFormats[$format];
        }

        $info = date_parse_from_format($format, $inputString);

        return ($info['error_count'] === 0 && $info['warning_count'] === 0);
    }
}