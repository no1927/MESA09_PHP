<?php
$a1[0]=123;
$a1[1]=12.3;
$a1[2]='brad';
var_dump($a1);  //顯示結果: array(3) { [0]=> int(123) [1]=> float(12.3) [2]=> string(4) "brad" }
echo '<hr>';
$a2[0]=123;
$a2[1]=12.3;
$a2[4]='brad';
var_dump($a2);  //顯示結果: array(3) { [0]=> int(123) [1]=> float(12.3) [4]=> string(4) "brad" }
echo '<hr>';
//key value
$a3['name']='brad';
$a3['weight']=80;
$a3['gender']=true;
$a3['age']=53;
$a3[123]=456;
var_dump($a3);  //顯示結果: array(5) { ["name"]=> string(4) "brad" ["weight"]=> int(80) ["gender"]=> bool(true) ["age"]=> int(53) [123]=> int(456) }
echo '<hr>';
$a4=array();
var_dump($a4);  //array(0) { }
echo '<hr>';
$a4=array(12,34,56,'xxx',false);
var_dump($a4);  //array(5) { [0]=> int(12) [1]=> int(34) [2]=> int(56) [3]=> string(3) "xxx" [4]=> bool(false) }
echo '<hr>';
//$a2[]=111;
//$a2[]=222;
//var_dump($a2);  // { [0]=> int(123) [1]=> float(12.3) [4]=> string(4) "brad" [5]=> int(111) [6]=> int(222) }
$a2[]=111;
$a2[2]=222;
$a2[]=333;
var_dump($a2);  // array(6) { [0]=> int(123) [1]=> float(12.3) [4]=> string(4) "brad" [5]=> int(111) [2]=> int(222) [6]=> int(333) }
echo '<hr>';
$a3[]=111;
$a3[]=222;
$a3[]=333;
var_dump($a3);
echo '<hr>';