<?php

for ($i=0;$i<10;$i++) {
    echo "{$i}<br>";
}
$j=1;
for(sayYa();$j<10;showHr()){
    echo "{$j}<br>";
    $j++;
}
//結果
//Ya1
//畫<hr>
//2
//畫<hr>
//3
//畫<hr>
//4
//畫<hr>
//5
//畫<hr>
//6
//畫<hr>



function sayYa(){
    echo 'Ya';
}
function showHr(){
    echo '<hr>';
}