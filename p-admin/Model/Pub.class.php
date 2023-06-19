<?php
class Pub{
private $titre;
private $date;
private $lien;
private $type;
private $image;
private $id_invistisseur;



function __construct($id_invistisseur,$titre,$date,$lien,$type,$image){
$this->titre = $titre;
$this->date= $date;
$this->image = $image;
$this->lien = $lien;
$this->type = $type;
$this->id_invistisseur=$id_invistisseur;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    
    
    
    
		//$type= intval($this->type);
		$req = $bdd->exec ("INSERT INTO `pub`(`id_invistisseur`,`titre`,`date`,`lien`,`type`, `image`) VALUES ('$this->id_invistisseur','$this->titre','$this->date','$this->lien','$this->type','$this->image')");
		
		//echo'oui';
                //return TRUE;
    
              
}

    public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $req=$bdd->exec("UPDATE `pub` SET id_invistisseur='$this->id_invistisseur',titre='$this->titre',date='$this->date',lien='$this->lien',type='$this->type',image='$this->image' WHERE id=$id");
				
        
        //echo'oui';
        //return TRUE;"
 			}	
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM pub WHERE id=\''.$_GET['id'].'\''); 
 
		//echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);


?>