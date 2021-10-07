<?php
require_once 'models/userentity.php'; 
require_once 'dal/userdao.php'; 
 
class UserService { 
   public function adduser(UserEntity $user) { 
       $dao = new UserDAO(); 
       $dao->adduser($user); 
   } 
} 