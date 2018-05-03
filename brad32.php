<?php
   include_once 'bradapis.php';
   if(isset($_GET['id'])){
       $id=$_GET['id'];
       $isRight=checkTWId($id);
       if($isRight)
       {
           echo "{$id} : Ok ";

       }
       else
       {
           echo "{$id} : Error";
       }
   }

?>



<form>
    <input type="text" name="id" />
    <input type="submit" value="check" />

</form>