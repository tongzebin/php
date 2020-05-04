<?php
$max = 10;
$L = [1];
foreach($L as $k=>$v){
		echo $v;
	}
	echo "<br/>";
$L = [1,1];
foreach($L as $k=>$v){
		echo $v;
	}
	echo "<br/>";
$n = 2;
while ($n < $max){
    $oldL = $L;
    $L[$n] = 1;
    $n++;
    for ($i = 1;$i <count($oldL);$i++){
        $L[$i] = $oldL[$i-1] + $oldL[$i];
    }
    foreach($L as $v){
		echo $v.' ';
	}
	echo "<br/>";
}
?>