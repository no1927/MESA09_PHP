<?php
$m=rand(1,12);
$d="";
switch ($m) {
    case 1: case 3: case 5:case 7:case 8; case 10: case 12 :
        $d='31';
        break;
    case 4: case 6: case 9:case 11:
        $d='30';
        break;
    case '2':
        $d='28';
        break;
    default :
        $d='30';
        break;
}
echo "m={$m}, d={$d}",'<br>';

$a='1';
switch ($a) {
    case 2:
        echo 'A';
        break;
    case '1':
        echo 'B';
        break;
    case 1:
        echo 'C';
        break;
    default :
        echo 'x';
}