<?php
    $v=-11.123;
    echo ceil($v);  //無條件進位
    $v2=11.123;
    echo 'floor=', floor($v2),'<br>';  // return 11 無條件捨去

    echo pow(2,8),"<br>";  //舊版php 幾次方的函數
    echo 2**8;  //2的8次方　　　//新版次方的處理