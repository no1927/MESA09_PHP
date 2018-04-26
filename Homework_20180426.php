<!--//用 if 判斷閏年-->
<h>請輸入西元年後按 [check] 判斷是否為閏年 V2</h>

echo 'test';
<?php
$year="";
$r1="";
$r2="";
$r3="";
$result="";
if (isset($_GET['year']) )  {
    $year=$_GET['year'];
    $r1=$year-intval($year/4)*4;
    $r2=$year-intval($year/100)*100;
    $r3=$year-intval($year/400)*400;

    if ($r3==0){
        $result='閏年';
    } else if ($r2=='0') {
        $result='沒有閏年';
    } else if ($r1=='0') {
        $result='閏年';
    } else  {
        $result='沒有閏年x';

    }
}
?>
<form>
    <input type="'text" name="year" value="<?php echo $year; ?>"/>
    <input type="submit" value="check" />
    <?php
    echo $result;
    ?>
</form>
