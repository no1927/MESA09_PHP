<?php
    $rate=$_GET['rate'];
    //產生畫布
    $img=ImageCreateTrueColor(400,40);

    //開始作畫
    $yellow =imagecolorallocate($img,255,255,0);
    imagefill($img,0,0,$yellow);
    $red = ImageColorAllocate($img,255,0,0 );
    imagefilledrectangle($img,0,0,400*$rate/100,40,$red);

    //輸出到檔案, 輸出到瀏覽器
    header('Content-Type: image/jpeg');
    imagejpeg($img);

    //清除記憶體
    imagedestory($img);