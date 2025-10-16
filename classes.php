<?php 
class User{
   private $email;
   private $name;

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
   public function getName(){
       return $this ->name;
   }
   public function setName($name){
      if(is_string($name) && strlen($name) > 1) {
         $this->name = $name;
         return "name has been updated to $name";
      }else {
         return 'not a valid name';
      }
   }
}
// $userOne = new User();
// $userOne->login();
// echo $userOne->email;

 $userTwo = new User('Vaspurik','dghcfds@gmail.uk');


 echo $userTwo->setName('Ramzes');
 echo $userTwo->getName();

//  echo $userTwo->name;
//  echo $userTwo->email;
// $userTwo->login();
// $userTwo->name = 50;
// $userTwo->name = 'Vormizduxt';
// echo $userTwo->name;

?>