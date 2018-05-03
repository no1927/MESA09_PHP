<?php
    //function
    sayYa();sayYa();sayYa();

    sayHello('brad');
    sayHelloV2('brad');
    sayHelloV2();
    sayHelloV3(3);
    sayHelloV4(2);
    sayHelloV4(12,3,3);
    sayHelloV4('xxx');
    sayHelloV4(1,2,3,'xxx');

function sayYa() {
        echo 'Ya<br>';
    }
    function sayHello($name){
        echo "Hello,{$name}<br>";
    }
    function sayHelloV2($name='World'){
        echo "Hello,{$name}<br>";
    }
    function sayHelloV3($n,$name='World'){
        //sayHelloV3(3); ,有預設值的定義要擺在後面
        for($i=1;$i<=$n;$i++)
        {
            echo "Hello,{$name}<br>";
        }
    }
    function sayHelloV4() {
       $ps=func_get_args();  //捕抓所有傳遞進來的參數 ==>array
       foreach($ps as $k =>$v)
       {
           echo "{$k}:{$v}<br>";
       }
    }