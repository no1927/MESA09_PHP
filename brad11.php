<?php
    $score=rand(0,100);
    echo $score,'<br>';

    switch ($score) {
        case $score>=90 :
            echo 'A';
            break;
        case $score>=80 :
            echo 'B';
            break;
        case $score>=70 :
            echo 'C';
            break;
        case $score>=60 :
            echo 'D';
            break;
        default :
            echo 'E';
            break;

    }
    echo '<hr>';
    $var1=10; $var2=3;
    if($var1++>=10 && $var2--<=3) {
        echo "ok: {$var1} : {$var2}<br>";  //ok: 11,2
    } else {
        echo "xx: {$var1} : {$var2}<br>";
    }
echo '<hr>';
$var1=10; $var2=3;
if($var1--<=10 && $var2++>3) {
    echo "ok: {$var1} : {$var2}<br>";
} else {
    echo "xx: {$var1} : {$var2}<br>";  //xx: 9 ,4
}

echo '<hr>';
$var1=10; $var2=3;
if($var1--<=10 || $var2++>3) {
    echo "ok: {$var1} : {$var2}<br>";   //ok: 9,3
} else {
    echo "xx: {$var1} : {$var2}<br>";
}