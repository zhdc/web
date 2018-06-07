<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/7 0007
 * Time: 10:20
 */

/*
 $dbms='mysql';     //数据库类型
$host='127.0.0.1'; //数据库主机名
$dbName='opensns';    //使用的数据库
$user='root';      //数据库连接用户名
$pass='123456';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";

// 实例化数据抽象层对象
$db=new PDO($dsn, $user, $pass);

// 对 SQL 语句执行 prepare，得到 PDOStatement 对象

$stmt=$db->prepare('SELECT * FROM ocenter_action WHERE id = :id AND name = :name');

// 绑定参数
//
$stmt->bindValue(':id',1);
$stmt->bindValue(':name','reg');

// 查询
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);//输出关联数组形式的结果集
print_r($res);
die();
 * */
class Db{
    
}