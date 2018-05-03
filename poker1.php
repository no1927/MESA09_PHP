<?php

$poker=array();
$isRepeat=false;
//for($i=0;$i<10;$i++) $poker[]=$i;
//洗牌
for($i=0;$i<51;$i++){
    $rand=rand(0,51);
    //檢查機制 (號碼不可重複)
    $isRepeat=false;
    for($j=0;$j<$i;$j++){
        if($poker[$j]==$rand) {
            //重複了
            $isRepeat=true;
            break;
        }
    }
    if(!$isRepeat) {
        $poker[$i]=$rand;
        //echo $poker[$i],'<br>';
    } else {
        $i--; //重跑,重新產生rand值
    }
}
foreach($poker as $k=>$v)
{
    echo "{$k}->{$v}<br>";
}