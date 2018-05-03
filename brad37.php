<?php
    $fp = fopen("test1/brad2.txt",'a+');
    fwrite($fp,"Hello, Brad");
    fclose($fp);

//    $fp = fopen("test1/brad2.txt",'r');
//
//    $cont = fread($fp,4096);
//    echo nl2br($cont);
//    fclose($fp);
//
//     $fp2 = fopen("test1/brad2.txt",'r');
//     while ($c=fgets($fp2)){     //fgetc , fgets , fgetss (去除html)
//         echo $c;
//     }
//     fclose($fp2);