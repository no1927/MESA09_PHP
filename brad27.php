//猜數字遊戲
<?php
    include 'bradapis.php';
    $result='';
    if(!isset($_GET['answer'])) {
        //首次進入
        $answer=createAnswer(3);
    }
    else {
        //之後進入
        $answer=$_GET['answer'];
        $guess = $_GET['guess'];

        $result = checkAB($answer,$guess);
        $hist .="{$guess} : {$result} <br>";
    }
    echo $answer;

?>

<form>
    猜數字:<input type="number" name="guess" />
    <input type="submit"  name="ok" value="Guess" />
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
</form>
<hr>
<div><?php echo $hist; ?></div>
