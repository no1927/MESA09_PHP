<form action="brad35.php" method="post">
    Account:  <input type="text" name="account"/><br>
    Password: <input type="password" name="password"/><br>
    Gender: <input type="radio" name="gender" value="m">Male
            <input type="radio" name="gender" value="f">Female
    興趣:
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打籃球
    <input type="checkbox" name="like[]" value="3">游泳<br>
    <input type="checkbox" name="like[]" value="4">桌球
    <input type="checkbox" name="like[]" value="5">爬山
    地區:
    <select name="zipcode">
        <option value="408">北屯區</option>
        <option value="407">西屯區</option>
        <option value="406">南屯區</option>
        <option value="401">東區</option>
    </select>
    <br>
    備註:
    <textarea name="memo" row="10" col="40"></textarea>
    <br>
    <input type="file"  name="upload" />
    <input type="submit" value="ok"/>
</form>