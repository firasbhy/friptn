<?php
class Annonceur{
private $nom;
private $login;
private $email;
private $password;
private $num_tel;



function __construct($nom,$login,$password,$email,$num_tel){
$this->nom = $nom;
$this->login = $login;
$this->password = $password;
$this->email = $email;
$this->num_tel = $num_tel;


}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM annonceur WHERE login LIKE '$this->login'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `annonceur`(`nom`, `login`, `password`, `email`, `num_tel`) VALUES ('$this->nom','$this->login','$this->password','$this->email','$this->num_tel')");
		
		//echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
	}
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `annonceur` SET nom='$this->nom',login='$this->login',password='$this->password',email='$this->email',num_tel='$this->num_tel' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM annonceur WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>