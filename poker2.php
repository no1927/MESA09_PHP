<?php
$poker=range(0,51);
//洗牌
shuffle($poker);  //shuffle洗牌函數
foreach($poker as $k=>$v)
{
   // echo "{$k}->{$v}<br>";
}
echo '<hr>';
//發牌給四個玩家
$a1=0;
$a2=0;
$players=array(array(),array(),array(),array());
//$poker | ? | ?
//-------------------
//    0    0   0
//    1    1   0
//    2    2   0
//    3    3   0
//    4    0   1
//    5    1   1
//    6    2   1
//    7    3   1
foreach($poker as $i=>$p)
{
    $players[$i%4][]=$p;   //$i%4 餘數=0~3 分別為四個玩家
}
for($i=0;$i<4;$i++)
{
    foreach($players[0] as $v){
        //echo "第 {$i}家{$v}<br>";
    }
}
?>
<table border="1" width="100%">


        <?php
            $suits=array('&spades;','&hearts;','&diams;','&clubs;');
            $v=array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
            foreach($players as $player){
                sort($player);
                echo '<tr>';
                foreach($player as $p){
                    echo '<td><font color="', ($suits[(int)$p/13]=='&hearts;'|$suits[(int)$p/13]=='&diams;')? 'red':'black','">';
                    echo "{$suits[(int)$p/13]}{$v[$p%13]}</td>";
                }
            }
            echo '</tr>';
            ?>

</table>