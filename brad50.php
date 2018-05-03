<?php
    include_once 'Bike.php';
    $brad = new People();
    $brad->setBike();
    echo $brad->bike->getSpeed(),'<br>';

    $you = new People();
    $you->setBike();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    $you->bike->upSpeed();
    $you->bike->upSpeed();

    echo 'brad :',$brad->bike->getSpeed(),'<br>';
    echo 'you :',$you->bike->getSpeed(),'<br>';

//    $myBike = new Bike();
//
//    echo $myBike->getSpeed(),'<br>';
//    do {
//        $myBike->upSpeed();
//        echo $myBike->getSpeed(),'<br>';
//    } while ($myBike->getSpeed()<=13);
