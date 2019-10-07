<?php
function max_array($arr){
    $max_number = $arr[0];
    
    foreach($arr as $a){
    //要素が$max_numberよりも大きいとその数字と置き換える式
        if ($max_number < $a){
            $max_number = $a;
         }
        }
    
return $max_number;
}
echo max_array(array(9,8,7,6,5));