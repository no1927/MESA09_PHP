<?php
$result = $x = $y = '';
$op='';
if (isset($_GET['x']) && isset($_GET['y']))  {
    $x=$_GET['x'];
    $y=$_GET['y'];
    $op=$_GET['op'];
    //echo $x,':',gettype($x);
    //echo $y,':',gettype($y);
    if ($op=='1'){
        $result= $x+$y;
    } else if ($op=='2') {
        $result=$x-$y;
    } else if ($op=='3') {
        $result=$x*$y;
    } else if ($op=='4') {
        $result=$x/$y;
       // $result += fmod($x,$y);
    }

    //echo "{$x}+{$y}={$result}";
    //顯示 100+34=134
}
?>
<form>
    <input type="'text" name="x" value="<?php echo $x; ?>"/>
    <select name="op" >
        <option value="1" <?php if($op=='1') { echo 'selected';} ?>>+</option>
        <option value="2" <?php if($op=='2') { echo 'selected';} ?>>-</option>
        <option value="3" <?php if($op=='3') { echo 'selected';} ?>>*</option>
        <option value="4" <?php if($op=='4') { echo 'selected';} ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>"/>
    <input type="submit" value="=" />
    <?php
    echo $result;  // undefine variable result
    ?>
</form>
