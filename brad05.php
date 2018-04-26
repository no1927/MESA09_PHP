
<?php
//字串
  $name='brad';
  $weight=80;
  echo $name ,':',$weight,'kg','<br>';    //顯示結果  brad:80kg
  echo "$name:$weightkg<br>";  //顯示結果  <b>Notice</b>:  Undefined variable: weightkg in <b>C:\MAMP2\htdocs\brad05.php</b> on line <b>7</b><br />
                           //brad:
  echo "{$name}:{$weight}kg<br>";   //顯示結果 brad:80kg
  echo '{$name}:{$weight}kg<br>';   //顯示結果  {$name}:{$weight}kg<br>

//變數大小寫在php上嚴格區分


?>
