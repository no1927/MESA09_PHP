<?php
$year = ''; $isLeap = '';
if (isset($_GET['year'])){
    $year = $_GET['year'];
    if ($year % 400==0){
        $isLeap = true; //29
    } else if ($year % 100 =='0') {
        $isLeap = false;
    } else if ($year % 4=='0') {
        $isLeap = true;
    } else  {
        $isLeap = tfalse;
    }
}
?>
<form>
    輸入年份: <input type="number" name="year" value="<?php echo $year; ?>"/>
    <input type="submit" value="判斷閏年" />
    <?php
    if ($isLeap !== ''){
        echo  ($isLeap?"閏年":"平年");
    }
    ?>
</form>