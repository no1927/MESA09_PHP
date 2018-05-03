<?php

    if(!isset($_FILES['upload'])) die("Server Busy");
    $upload = $_FILES['upload'];
    foreach($upload as $k =>$v){
        echo "{$k} : {$v}<br>";
        //    name : 今天也要美美的.jpg
        //    type : image/jpeg
        //    tmp_name : C:\Users\Debbie Tsai\AppData\Local\Temp\php242C.tmp
        //    error : 0
        //    size : 55277
    }

if($upload['error'] == 0) {
    copy($upload["tmp_name"],"test3/{$upload["name"]}");
    echo 'ok';
}
else {echo 'xxx';}
//$filename="test3/{$upload["name"]}";
//header("Location: {$filename}");  //導覽至上傳檔案頁面