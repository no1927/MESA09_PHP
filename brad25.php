<?php
    //宣告傳回值
    function test1($x,$y): int{
        return $x / $y ;
    }
    $r =test1(10,3);
    var_dump($r);