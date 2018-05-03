<?php
    require_once ("brad29.php");
   // require_once 'brad303.php';  //include 跟require_once都可引用檔案, 但若檔案不存在時require會發生嚴重錯誤導致程式無法執行, include 會顯示錯誤但程式可繼續執行

    include 'brad30.php';
    echo 'Hello, World';
    echo '<hr>';
    echo myurl1;
    echo '<hr>';
    echo 公司名稱;
    echo '<hr>';

    $r=4;
    $area=PI*($r*2);  // 可以引用 brad29.php 裡的常數 PI
    echo $area;
