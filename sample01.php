<?php

// 課題１

$a = 3;
$b = 7;
echo $a + $b;

// 課題２

$array_month = [ "1月","2月","3月","4月","5月","６月","７月","８月","９月","10月","11月","12月"];
echo $array_month[7];

// 課題３

$hello = "Hello";
$name = "Hirofumi";
$world = "'s World!";
echo $hello . $name . $world;

//課題４

$tech_boost = "tech";
$tech_boost .="_boost";
echo $tech_boost;

//課題５

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];

p?>