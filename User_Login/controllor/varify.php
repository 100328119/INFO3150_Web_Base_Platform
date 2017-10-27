<?php
//get user input from calling page
if(isset($_POST["re"])){
 $input_id = $_POST["u_id"];
 echo "<h1>POST IS GET</h1>";
 }else{
   echo "<h1>post is not get</h1>";
 }
 ?>
<html>
<body>
  <?php
  if(empty($input_id)){
    echo "<h1>error</h1>";
  }else{
    echo $input_id;
       echo "<h1>Success</h1>";
  }
  //get user input from calling page
   ?>
</body>
</html>
