<?php
//观察者模式--设计模式
//定义一个被观察者
interface Observables{
	public function attach(Observer $ob);
	public function detach(Observer $ob);
	public function notify();
}
//定义一个观察者
interface Observer{
	public function doActor(Observables $obv);
}

class Saler implements Observables{
	protected $obs = array();//保存观察者
	protected $range = 0;
	
	public function attach(Observer $ob){
		$this->obs[] = $ob;
	}
	
	public function detach(Observer $ob){
		foreach ($this->obs as $o){
			if ($o != $ob){
				$this->obs[] = $o;
			}
		}
	}
	
	public function notify(){
		foreach ($this->obs as $o){
			$o->doActor($this);
		}
	}
	
	public function increPrice($range){
		$this->range = $range;
	}
	
	public function getAddRange(){
		return $this->range;
	}
}

abstract class Buyer implements Observer{
	
}

class PoorBuyer extends Buyer{
	public function doActor(Observables $obv){
		if($obv->getAddRange() > 10){
			echo '不买了.<br/>';
		}else {
			echo '还行吧，买一点吧.<br/>';
		}
	}
}

$saler = new Saler();
$saler->attach(new PoorBuyer());
$saler->notify();

$saler->increPrice(20);
$saler->notify();






































