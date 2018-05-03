<?php
    //打上浮水印
    $img = imagecreatefromjpeg("coffeee.jpg");
    $blue = imagecolorallocate($img,0,0,255);
    $red = imagecolorallocate($img,255,0,0);
    $font= "Roboto-Bold.ttf";
    imagettftext (  $img,   24 ,  30 , 900 , 100 ,  $blue , $font , "A" );
    imagettftext (  $img,   24 ,  -24 , 925 , 100 ,  $red , $font , "B" );
    imagettftext (  $img,   24 ,  10 , 950 , 100 ,  $blue , $font , "7" );
    imagettftext (  $img,   24 ,  -15 , 975 , 100 ,  $red , $font , "0" );
    header("Content-type: image/jpeg");
    imagejpeg($img);

    imagedestory($img);