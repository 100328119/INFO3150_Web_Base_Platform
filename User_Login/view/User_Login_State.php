<?php
//get user input from calling page
if(isset($_POST['User_id']) and isset($_POST['User_password'])){
 $input_id = $_POST['User_id'];
 $input_password = $_POST['User_password'];
 echo $input_id . "<br>" .$input_password;
 }
 ?>
<html>
<body>
 <?php
//get database connecttion
  $conn = OpenCon();
  $sql_qurey = "SELECT * from user_sample WHERE User_email = '".$input_id."' AND User_Password ='".$input_password."'";
  $result = mysqli_query($conn,$sql_qurey);
  if(mysql_num_rows($result) == 1){
          echo "<h1>Success</h1>";
          echo "<p>We are now redirecting you to the member area.</p>";
  }else{
          echo "<h1>fail</h1>";
        }
//establish the database connection function
  function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "hkytuntun12";
    $db = "studysample";
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connect fail %s
    \n". $conn -> error);

    return $conn;
    }
    // close the database connecttion
    function CloseCon($conn){
      $conn ->close();
    }

     ?>
   </body>
   </html>
