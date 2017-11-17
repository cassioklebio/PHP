<?php
       
    $vetor[0] = 90;
    $vetor[1] = 4;
    $vetor[2] = 0;
    $vetor[3] = -1;
    $vetor[4] = -4;
    $vetor[5] = -67;
    $vetor[6] = 6;
    $vetor[7] = -17;
    
    

 function insertion_Sort($vetor2)
{
	for($i=0;$i<count($vetor2);$i++){
		$temp = $vetor2[$i];
		$j = $i-1;
		while($j>=0 && $temp < $vetor2[$j]){
			$vetor2[$j+1] = $vetor2[$j];
			$j--;
		}
		$vetor2[$j+1] = $temp;
	}
return $vetor2;
}


print_r(insertion_Sort($vetor));
?>

