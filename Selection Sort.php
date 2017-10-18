<?php
    $vetor[0] = 5;
    $vetor[1] = 8;
    $vetor[2] = 9;
    $vetor[3] = 10;
    $vetor[4] = 24;
    $vetor[5] = 89;
    $vetor[6] = 1;
    $vetor[7] = 19;
    $vetor[8] = 20;
    $vetor[9] = 30;
    $vetor[10] = 40;
    
    
    $total = count($vetor);
    
    function selectSort(array $vetor){
        for($i = 0; $i<$total-1; $i++){
            $min = $i;
            for($j=$i+1;$j<$total;$j++){
                if($vetor[$j]<$vetor[$min]){
                    $min=$j;
                }
            }
            if($i != $min){
            $swap = $vetor[$i];
            $vetor[$i] = $vetor[$min];
            }
            
        }
    return $vetor;
    
    }
?>
