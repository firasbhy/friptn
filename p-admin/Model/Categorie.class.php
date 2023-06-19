<?php
class Categorie{
private $nom;
private $discription;
private $image;




function __construct($nom,$discription,$image){
$this->nom = $nom;
$this->discription= $discription;
$this->image = $image;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    $req = $bdd->query("SELECT * FROM categorie WHERE nom LIKE '$this->nom'");
    $count = $req->rowCount();
    
    if ($count == 0) {
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `categorie`(`nom`,`discription`, `image`) VALUES ('$this->nom','$this->discription','$this->image')");
		
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
        
        $req=$bdd->exec("UPDATE `categorie` SET nom='$this->nom',discription='$this->discription',image='$this->image' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM categorie WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>