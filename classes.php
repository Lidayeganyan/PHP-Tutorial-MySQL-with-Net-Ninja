<?php 
class User{
   public $email;
   public $name;


   public function __construct($name,$email){
      // $this->email = '  mariobyb@gmail.com';
      // $this->name = ' Vaspurik';

      $this->email =$email;
      $this->name =$name;
   }
   public function login(){
      // echo 'the user loggid in';
      echo $this->name . 'logged in' . '<br />';
      echo $this->email . 'and this her email';
   }
}
// $userOne = new User();

// $userOne->login();
// echo $userOne->email;

 $userTwo = new User('Vaspurik    ','dghcfds@gmail.uk');
//  echo $userTwo->name;
//  echo $userTwo->email;
$userTwo->login();
?>