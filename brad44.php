<?php
    $upload = $_FILES['upload'];
//    foreach($upload as $key =>$value) {
//        echo "{$key} : ";
//        var_dump($value) ;
//        echo "<br/>";
////        name : array(4) { [0]=> string(16) "三個傻瓜.jpg" [1]=> string(22) "心中的小星星.jpg" [2]=> string(0) "" [3]=> string(22) "隱藏的大明星.jpg" }
////        type : array(4) { [0]=> string(10) "image/jpeg" [1]=> string(10) "image/jpeg" [2]=> string(0) "" [3]=> string(10) "image/jpeg" }
////        tmp_name : array(4) { [0]=> string(51) "C:\Users\Debbie Tsai\AppData\Local\Temp\php53E6.tmp" [1]=> string(51) "C:\Users\Debbie Tsai\AppData\Local\Temp\php53E7.tmp" [2]=> string(0) "" [3]=> string(51) "C:\Users\Debbie Tsai\AppData\Local\Temp\php53E8.tmp" }
////        error : array(4) { [0]=> int(0) [1]=> int(0) [2]=> int(4) [3]=> int(0) }
////        size : array(4) { [0]=> int(81824) [1]=> int(91918) [2]=> int(0) [3]=> int(123056) }
//    }

    foreach ($upload['error'] as $key =>$value){

        if($value==0){
           if(copy($upload['tmp_name'][$key],"test3/{$upload['name'][$key]}")) {
               echo 'upload ok;',$upload['name'][$key],'<br>';
           }
           else
            {
                echo 'upload false;',$upload['name'][$key],'<br>';

            }
        }
    }