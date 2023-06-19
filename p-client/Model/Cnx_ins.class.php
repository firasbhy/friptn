<?php
class CnxInv{
private $email;
private $password;

        
function __construct($email,$password){
$this->email = $email;
$this->password = $password;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM  invistisseur WHERE email = '$this->email' AND password = '$this->password' ");
    $resultat = $req->fetch();
    

 if (!$resultat)
{
  header('location:../Identifiant_inv.php?result=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['prenom'] = $resultat['prénom'];
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       $_SESSION['tel'] = $resultat['tel'];
       
     
header('location:../index_inv.php');


}

}
}





?>