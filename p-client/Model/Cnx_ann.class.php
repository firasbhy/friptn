<?php
class Cnxann{
private $email;
private $password;

        
function __construct($email,$password){
$this->email = $email;
$this->password = $password;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM annonceur WHERE email = '$this->email' AND password = '$this->password'");
    $resultat = $req->fetch();
    

 if (!$resultat)
{
  header('location:../Identifiant_ann.php?result=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
     
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['email'] = $resultat['email'];
       
       $_SESSION['password'] = $resultat['password'];
       $_SESSION['num_tel'] = $resultat['num_tel'];
       
     
header('location:../index_ann.php');


}

}
}





?>