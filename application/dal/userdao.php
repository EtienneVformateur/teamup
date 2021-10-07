<?php
require_once 'config.php';
class UserDAO
{
    private $db_connection; 
 
   public function __construct() { 
       $this->db_connection = get_default_connection(); 
   } 
   public function adduser(UserEntity $user) { 
    $cx = mysqli_connect($this->db_connection["cx_server"], 
        $this->db_connection["cx_login"], 
        $this->db_connection["cx_pwd"], 
        $this->db_connection["cx_dbname"]); 

    $login = $user->utilisateur_login; 
    $pwd = $user->utilisateur_pwd; 
    $nom = $user->utilisateur_nom; 
    $email = $user->utilisateur_email; 
    
    $datec = DateTime::createFromFormat('d/m/Y', $user->utilisateur_creation); 
    $creation = $datec->format('Y-m-d'); 

    $query = "insert into utilisateur(utilisateur_creation,utilisateur_email,
utilisateur_login,utilisateur_nom,utilisateur_pwd) ". 
        "values ('$creation','$email','$login','$nom','$pwd')"; 

    mysqli_query($cx, $query); 

    mysqli_close($cx); 
} 
}
