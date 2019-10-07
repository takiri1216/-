<?php
function foo($arr){
    //数値が入った数列を渡す
    $array = array(1,3,5,7,9);

    foreach ($array as $value){
        //要素と引数を全てかける式
        $result = $arr * $value;
    //結果を表示し、改行する
    echo $result;
    echo "\n";
    }
}
//()内に数字を代入する
echo foo(3);