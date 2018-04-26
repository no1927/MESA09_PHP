
<?php
//數值
$v1=10;$v2=3;
$v3=$v1/$v2;
echo "{$v1}/{$v2}={$v3}<br>";   // 10/3=3.3333333333333


$v1=10;$v2=3;
$v3=(int)($v1/$v2);
echo "{$v1}/{$v2}={$v3}<br>";   // 10/3=3

$v1=10;$v2=0;
$v3=(int)($v1/$v2);
echo "{$v1}/{$v2}={$v3}<br>";   // 10/0=inf

$v4='3';  //string
$v5=$v1+$v4;
echo "{$v1}+{$v4}=$v5<br>";

$v4='4Brad';
$v5=$v1+$v4;
echo "{$v1}+{$v4}=$v5<br>";  // 10+4Brad=14  //Notice: A non well formed numeric value encountered in C:\MAMP2\htdocs\brad06.php on line 22

$v5='5';
$v6=$v4+$v5;
echo "{$v4}+{$v5}=$v6 <br>";  //Notice: A non well formed numeric value encountered in C:\MAMP2\htdocs\brad06.php on line 26
                              //4Brad+5=9
?>
