<?php
$result = '';
    if (isset($_Get['x']) && isset($_GET['y']))  {
        $x=$_GET['x'];
        $y=$_GET['y'];
        //echo $x,':',gettype($x);
        //echo $y,':',gettype($y);
        $result=$x+$y;
        echo "{$x}+{$y}={$result}";
        //顯示 100+34=134
    }
?>
<form>
    <input type="'text" name="x" />
    +
    <input type="text" name="y" />
    <input type="submit" value="=" />
    <?php
       echo $result;  // undefine variable result
    ?>
</form>
