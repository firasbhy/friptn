<?php
class Invistisseur{
private $nom;
private $prénom;
private $login;
private $tel;
private $email;
private $password;



function __construct($nom,$prénom,$login,$tel,$email,$password){
$this->nom = $nom;
$this->login = $login;
$this->password = $password;
$this->email = $email;
$this->prénom= $prénom;
$this->tel= $tel;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM invistisseur WHERE login LIKE '$this->login'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `invistisseur`(`nom`,`prénom`, `login`, `tel`, `email`,`password`) VALUES ('$this->nom','$this->prénom','$this->login','$this->tel','$this->email','$this->password')");
		
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
        
        $req=$bdd->exec("UPDATE `invistisseur` SET nom='$this->nom',prénom='$this->prénom',login='$this->login',tel='$this->tel',email='$this->email',password='$this->password' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM invistisseur WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>