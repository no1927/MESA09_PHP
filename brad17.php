<?php
$p=array(1=>0,0,0,0,0,0);  //index 由 1 開始
var_dump($p);
echo '<br>';
for($i=1;$i<=1000;$i++) {
    $point = rand(1, 9);
    $p[$point>=7?$point-3:$point]++;   //機率: 讓4,5,6出現次數增加　，　所以亂數取1-9, 當數字大於6時減三

}
for($i=1;$i<=6;$i++) {
    echo "{$i} 點出現 {$p[$i]} 次<br>";
}
echo count($p);
echo '<hr>';

for($i=1;$i<=count($p);$i++)
{
    echo "{$i} 點出現 {$p[$i]} 次<br>";
}
echo '<hr>';

foreach($p as $key =>$value){
    echo "{$key}:{$value}<br>";
}