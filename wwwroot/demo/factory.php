<?php
header("Content-Type:text/html;charest=utf-8");

interface people{
    public function say();
}

class man implements people{
    public function say(){
        echo "我是男人</br>";
    }
}

class woman implements people{
    public function say(){
        echo "我是女人";
    }
}

class SimplFactoty{
    static function createMan(){
        return new man();
    }
    
    static function createWoman(){
        return new woman();
    }
}

$man = SimplFactoty::createMan();
$man->say();

$woman = SimplFactoty::createWoman();
$woman->say();