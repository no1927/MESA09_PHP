<?php

$poker=array();
$isRepeat=false;
//for($i=0;$i<10;$i++) $poker[]=$i;
//洗牌
for($i=0;$i<51;$i++){
    do {
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

    } while ($isRepeat);
    $poker[$i]=$rand;
}
foreach($poker as $k=>$v)
{
    echo "{$k}->{$v}<br>";
}