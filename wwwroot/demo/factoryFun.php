<?php
header("Content-type:text/html;charset=utf-8");

interface people{
	public function say();
}

class man implements people{
	function say(){
		echo "我是男人-hi</br>";
	}
}

class woman implements people{
	function say(){
		echo "我是女人-hi</br>";
	}
}

interface createPeople{
	public function create();
}

class FactoryMan implements createPeople{
	public function create(){
		return new man();
	}
}

class FactoryWoman implements createPeople{
	public function create(){
		return new woman();
	}
}


$factory = new FactoryMan();
$man = $factory->create();
$man->say();

$factory = new FactoryWoman();
$woman = $factory->create();
$woman->say();