<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/5 0005
 * Time: 10:29
 */

$core_path = dirname(dirname(dirname(__FILE__)));
require_once $core_path."/core/start_core.php";

$p = new Common();
$v = $p->noWhitespace("99 ");
var_dump($v);