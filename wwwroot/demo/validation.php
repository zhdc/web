<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/4 0004
 * Time: 10:54
 */

/*校验参数*/

//参数校验
//class ValidationDate{
//    public $format = null;
//
//    public function __construct($format = null)
//    {
//        $this->format = $format;
//    }
//
//    public function validate($input)
//    {
//        if ($input instanceof DateTimeInterface
//            || $input instanceof DateTime) {
//            return true;
//        }
//
//        if (!is_scalar($input)) {
//            return false;
//        }
//
//        $inputString = (string) $input;
//
//        if (is_null($this->format)) {
//            return false !== strtotime($inputString);
//        }
//
//        $exceptionalFormats = [
//            'c' => 'Y-m-d\TH:i:sP',
//            'r' => 'D, d M Y H:i:s O',
//        ];
//
//        if (in_array($this->format, array_keys($exceptionalFormats))) {
//            $this->format = $exceptionalFormats[$this->format];
//        }
//
//        $info = date_parse_from_format($this->format, $inputString);
//
//        return ($info['error_count'] === 0 && $info['warning_count'] === 0);
//    }
//}

function validateDate($input,$format = null)
{
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

$b = validateDate('2018-8-8');
var_dump($b);
die();