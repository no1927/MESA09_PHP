//自己呼叫自己, 寫一個計算式, 先判斷 n 是否輸入，若輸入處理計算，傳回表單顯示結果
<?php
$n='';
$sum='';
if(isset($_GET['n'])){
    $n=$_GET['n'];
    $sum=0;$i=1;
    while($i<=$n){
        $sum += $i;
        $i++;
    }
}
?>

<form>
    1+2+...+
    <input type="number" name="n" value="<?php echo $n; ?>"/>
    <input type="submit" value="=" />
    <?php echo $sum; ?>
</form>
