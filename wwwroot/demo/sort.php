<?php
//冒泡排序
/*
$arr=array(1,2,3,4,5,8,6,7);  
function bubbleSort($arr){
	$len = count($arr);
	
	for($i=1;$i<$len;$i++){
		for($k=0;$k<$len-$i;$k++){
			if($arr[$k]>$arr[$k+1]){
				$tmp = $arr[$k+1];
				$arr[$k+1]=$arr[$k];
				$arr[$k] = $tmp;
			}
		}
	}
	return $arr;
}

$sort = bubbleSort($arr);
print_r($sort);
*/

/*选择排序
function selectSort($arr){
	$len = count($arr);
	for($i=0;$i<$len;$i++){
		$p = $i;//假定最小值的位置
		for ($j=$i+1;$j<$len;$j++){
			if($arr[$p] > $arr[$j]){
				$p = $j;
			}
		}
		
		if($p != $i){
			$tmp = $arr[$p];
			$arr[$p] = $arr[$i];
			$arr[$i] = $tmp;
		}
	}
	return $arr;
}
*/

$arr=array(1,2,3,4,5,8,6,7);  
function quickSort($arr){
	$length = count($arr);
	if($length <= 1){
		return $arr;
	}
	//选择第一个元素作为基准
	$base_num = $arr[0];
	$left_array = array();
	$right_array = array();
	for($i=1;$i<$length;$i++){
		if($base_num>$arr[$i]){
			$left_array[] = $arr[$i];
		}else {
			$right_array[] = $arr[$i];
		}
	}
	
	$left_array = quickSort($left_array);
	$right_array = quickSort($right_array);
	
	return array_merge($left_array,array($base_num),$right_array);
}

print_r(quickSort($arr));










































