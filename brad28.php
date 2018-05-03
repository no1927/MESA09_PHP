<?php
$str="資策會123";
$str2="abcdef";
echo strLen($str),'<br>';  //長度=12
echo strlen($str),'<br>';  //長度=12

echo $str2,strpos($str2,"b"),'<br>';

echo $str2,strpos($str2,"k"),'<br>';

$pos=strpos($str2,"k");
if($pos===false){
    echo 'xx';
}
$codes = '0123456789ABCDEFGHJKLMNPQRSTUVXYWZIO';        // 注意英文字母順序
echo strpos($codes,'A');  // 傳回  10


