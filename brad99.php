
<table border=""1" width="100%">
   <tr>
       <?php
          for($n=0;$n<=3;$n++){
              echo '<tr>';
              for($j=2;$j<=5;$j++){
                  $num=$j+$n*4;
//                  if(($num+$n) % 2==0){
//                      echo '<td bgcolor="yellow">';
//                  }
//                  else {
//                      echo '<td bgcolor="#ffc0cb">';
//                  }
                  echo '<td bgcolor="' , ((($num+$n) % 2==0)?'green':'pink') ,  '">';
                  for ($i=1;$i<=9;$i++){
                      echo "{$num} * {$i}=",$num*$i,"<br>";
                  }
                  echo '</td>';
              }
              echo '</tr>';
          }
       ?>
   </tr>
</table>
<?php
