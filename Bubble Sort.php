<?php
function troca(&$valor1,&$valor2){
   $var_temp = $valor1;
   $valor1= $valor2; 
   $valor2 = $var_temp;
    
    
    
}
$array[0] =$_POST [$valor1];
$array[1] =$_POST [$valor2];
$array[2] =$_POST [$valor3];
$array[3] =$_POST [$valor4];
$array[4] =$_POST [$valor5];
$array[5] =$_POST [$valor6];
$array[6] =$_POST [$valor7];
$array[7] =$_POST [$valor8];
$array[8] =$_POST [$valor9];
$array[9] =$_POST [$valor10];
print_r ($array);

$total = count($array);

for($i =0; $i< ($total-1); $i++){
    for($j = $i+1; $j < $total; $j++){
        if($array[$i]> $array[$j]){
            troca($array[$i], $array[$j]);
        }
    }
}
print_r($array);

?>
