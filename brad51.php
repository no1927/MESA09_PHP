<?php
    include_once 'Bike.php';
    $myId=new TwId("");
    echo $myId->getId(),'<br>';
    if(TwId::checkTwId($myId->getId())){
        echo 'ok';
    } else {
        echo 'xx';
    }
    echo '<hr>';
    try {
        $urID=new TwId('A123456787');
        echo $urID->getId(),'<br>';
    } catch (Exception $e) {
        $urID=null;
        echo  $e->getMessage();

    }
    echo '<hr>';

//    $myBike = new Bike();
//
//    echo 'counter = ',Bike::$counter,'<br>';
//
//    echo $myBike->getSpeed(),"<br>";
//    echo 'counter = ',Bike::$counter,'<br>';
//
//    $yourBike=new Bike(1,231);
//
//    echo $yourBike->getSpeed(),"<br>";
//    echo 'counter = ',Bike::$counter,'<br>';


?>