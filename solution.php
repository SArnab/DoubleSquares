<?php

$fh = fopen($argv[1],'r');
fscanf($fh,"%d",$n);
$results = array();

while(fscanf($fh,"%d",$number)) {
	if(isset($results[$number])) {
		echo $results[$number]."\n";
		continue;
	}

	$x = floor(sqrt($number));
	$y = 0;
	$x_squared = pow($x,2);
	$y_squared = 0;
	$results[$number] = 0;
	while($x >= $y){
		$sum = $x_squared + $y_squared;

		if($sum < $number){
			$y++;
			$y_squared = pow($y,2);
		} else if($sum > $number){
			$x--;
			$x_squared = pow($x,2);
		} else if($sum == $number){
			$results[$number]++;
			$y++;$x--;
			$y_squared = pow($y,2);
			$x_squared = pow($x,2);
		}
	}
	echo $results[$number]."\n";
}

?>