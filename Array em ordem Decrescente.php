<?php
  
  $list[0] = 1;
  $list[1] =2;
  $list[2] =4;
 
  
  $total = count($list);
  
  print_r($list);
  
  print_r($total);
  
   function ordem_decrescente($list){
      for($i = 0; $i < count($list);$i++){
         for($j = 0; $j <count($list)-1; $j++){
              if($list[$j]< $list[$j+1]){
              $temp = $list[$j];
              $list[$j]= $list[$j+1];
              $list[$j+1] = $temp;
              break;
            }
         }
          
      }
      return $list;
    }
  
  print_r(ordem_decrescente($list));
