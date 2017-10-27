<?php
  include('db.php');
  //user class used for inistiate the user object
  class user {
    private  $user_name;
    private  $user_id;
    private  $user_password;
    private  $user_email;
    private $user_moder = new User_Model();

    //user register function
    function set_user_email($_email){
      $this->user_email = $_email;
    }

    function set_user_name($_name){
      $this->user_name = $_name;
    }

    function set_user_password($_password){
      $this->user_password = $_password;
    }
    //get user information function
    function get_user_email(){
      return $user_email;
    }

    function get_uer_name(){
      return $user_name;
    }

    private function get_user_password(){
      return $user_password;
    }

    function get_user_id(){
      return $user_id;
    }

    function print_user_info(){
      echo $this->user_name." ".$this->user_email." ".$this->user_id." ".$this->password;
    }

    //get user info by input email
    function get_name_by_email($_email){
      echo $_email;
      $db = new User_db;
      $result = $db->retrive_user_data($_email);
      if($result != false){
        $this->user_name = $result;
        echo " Successfully Get info ".$this->user_name;
      }
    }
    function
  }

  $testing = new user;
  $testing->get_name_by_email("kunyuanhuang12@gmail.com");
 ?>
