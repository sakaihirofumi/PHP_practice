<?php

//課題１

$name = sakai;
$name1 = 'sakai';

if ($name === $name1){
  echo '私はあなたの名前です。';
}else{
  echo'あなたの名前ではありません。';
}


//課題２

$total = 0;

for($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//課題３

$fruits = array("apple", "orange" ,"banna","peech","lemon");

foreach ($fruits as $fruit){
  echo $fruit;
  echo "_";
}

//課題４

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  
  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n"; 
  }
}








