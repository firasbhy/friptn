<?php
class Annonce{
private $titre;
private $description;
private $prix;
private $type;
private $image;
private $id_annonceur;
private $id_categorie;


function __construct($id_annonceur,$titre,$description,$id_categorie,$prix,$type,$image){
$this->titre = $titre;
$this->description= $description;
$this->image = $image;
$this->prix = $prix;
$this->type = $type;
$this->id_annonceur=$id_annonceur;
$this->id_categorie=$id_categorie;
}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `annonce`(`id_annonceur`,`titre`,`description`,`id_categorie`,`prix`,`type`, `image`) VALUES ('$this->id_annonceur','$this->titre','$this->description','$this->id_categorie','$this->prix','$this->type','$this->image')");
		
		//echo'oui';
                //return TRUE;
    
              
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `annonce` SET id_annonceur='$this->id_annonceur',titre='$this->titre',description='$this->description',id_categorie='$this->id_categorie',prix='$this->prix',type='$this->type',image='$this->image' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM annonce WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>