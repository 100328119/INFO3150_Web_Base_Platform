<?
class User_Model{
 private $result;
 private $user_name;
 private $conn = new My_db();

 function load_user_by_email($_email){
   $db_conn = $this->conn->open_db_conn();
   $_stmt = "SELECT * from `user_sample` WHERE User_email = '$_email'";
   $this->result = mysqli_query($db_conn,$_stmt);
   if(!$this->result){
      die('Could not get data: ' . mysqli_error());
   }
   if(mysqli_num_rows($this->result)==1){
          while($row = mysqli_fetch_array($this->result)){
            $user_name = $row['User_name'];
          }
          return $user_name;
   }else{
          return false;
         }
   $db_conn->close_db_conn();
 }


}
?>
