<?php
class Pages{

private $titre;
private $description;





function __construct($titre,$description){

$this->description= $description;
$this->titre= $titre;

}







    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `pages` SET titre='$this->titre',description='$this->description' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM pages WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>