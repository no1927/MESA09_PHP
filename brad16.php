<?php
$r1=0;
$r2=0;
$r3=0;
$r4=0;
$r5=0;
$r6=0;
for($i=1;$i<=100;$i++) {
    $num=rand(1,6);
    switch ($num)
    {
        case 1:
            $r1++; break;
        case 2:
            $r2++; break;
        case 3:
            $r3++; break;
        case 4:
            $r4++; break;
        case 5:
            $r5++;break;
        case 6:
            $r6++;break;
        default :
            echo 'xxx';
    }
}
echo "1點出現{$r1}";
echo "2點出現{$r2}";
echo "3點出現{$r3}";
echo "4點出現{$r4}";
echo "5點出現{$r5}";
echo "6點出現{$r6}";