<?php 


function algo($algo_name,$arr){
	if(count($arr)<=1){
		echo "Single Index of array cant be sorted";
	}
	
    // Bubble Sort
	elseif($algo_name =='BubbleSort'){
		$start = microtime(true);
		$size = count($arr);
		for($i=0;$i<$size;$i++){
			for($j=0;$j<$size;$j++){
				if($arr[$i]<$arr[$j]){
					list($arr[$i],$arr[$j]) = array($arr[$j],$arr[$i]);
				}
			}
		}
		$stop = microtime(true);
		echo "BubbleSort Result: "."<br><br>";
		echo "BubbleSort Algorithm Time Duration: ".$run_time = $stop - $start." Seconds"."<br>";
		for($i=0;$i<$size;$i++){
			echo '<pre>';
			print_r($arr[$i]);
			echo '</pre>';
		}
	}


    // Selection Sort
	elseif($algo_name =='SelectionSort'){
		$start = microtime(true);
		$size = count($arr);
		for($i=0;$i<$size-1;$i++){
			for($j=$i+1;$j<$size;$j++){
				if($arr[$i]>$arr[$j]){
					list($arr[$i],$arr[$j]) = array($arr[$j],$arr[$i]);
				}
			}
		}
		$stop = microtime(true);
		echo "Selection Sort Result: "."<br><br>";
		echo "Selection Sort Algorithm Time Duration: ".$run_time = $stop - $start." Seconds"."<br>";

		for($i=0;$i<$size;$i++){
			echo "<pre>";
			print_r($arr[$i]);
			echo"</pre>";
		}
	}


    // Insertion Sort
	elseif($algo_name =='InsertionSort'){
		$start = microtime(true);
		$size = count($arr);
		if($size<0){return $arr; } // To Check Whether the array is not Empty
		for($i=0;$i<$size;$i++){
			$temp = $arr[$i];
			for($j=$i-1;$j>=0;$j--){
				if($arr[$j]>$temp){
					list($arr[$j],$arr[$j+1])=array($temp,$arr[$j]);
				}
			}
		}
		$stop = microtime(true);
		echo "Insertion Sort Result: "."<br><br>";
		echo "Insertion Sort Algorithm Time Duration: ".$run_time = $stop - $start." Seconds"."<br>";

		for($i=0;$i<$size;$i++){

			echo "<pre>";
			print_r($arr[$i]);
			echo"</pre>";
		}
	}
}

// $algo_name 
	 // BubbleSort,InsertionSort,SelectionSort
$algo_name = "QuickSort";
$arr= array(13,23,43,56,76,65,38,87,92,0,6,9,4,10);
$res = algo($algo_name,$arr);
echo '<pre>';
print_r($res);
echo '</pre>';

?>