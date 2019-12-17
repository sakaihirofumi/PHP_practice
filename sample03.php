<?php

//課題１

function sum($max) {
    $result = 0;
 
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    
    return $result;
}

echo sum(100);

//課題２

function f($a, $b){

$c=$a+$b;

return $c;

}  
  $c = f(3 ,7);
  echo $c;

//課題３

$arr = array(1,3,5,7,9);
echo array_product($arr);


//課題４

function max_arry($arr){
    
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a) {
         $max_number = $a;
     }
    }
 return $max_number;
}


//課題５
//strip_tags

$text ='<p>Test paragraph.</p><!--comment--><a>othher text</a>'
echo strip_tags($text);

//array_push

$fruits = ['apple','orange','melon']

array_push($fruits, 'banana','lemon');

print r($fruits);


//array_merge

$arry1 = [1,2,3];

$arry2 = [4,5,6];

$arry3 = [7,8,9];

$arry = array_merge($array1, $array2, $array3);

print_r($array);

//time,mktime

echo '現在のUnixタイムスタンプ：'.time();

echo'<br>';

$nweek = time() + (7*24*60*60);

echo '1週間後のUnixスタンプ：'.$nweek;


$timestamp = mktime(0,0,0,24,12,2019);

echo $timestamp;


//date

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/t");














