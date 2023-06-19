<?php
class Contact{
private $nom;
private $email;
private $sujet;
private $msg;
private $datee;
private $lu;

function __construct($nom,$email,$sujet,$msg,$datee,$lu){
$this->nom = $nom;
$this->email = $email;
$this->sujet = $sujet;
$this->msg = $msg;
$this->datee = $datee;
$this->lu=$lu;
}





public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
    
    
		
		$req = $bdd->exec ("INSERT INTO `contact`(`nom`,`email`,`sujet`,`msj`,`datee`,`lu`) VALUES ('$this->nom','$this->email','$this->sujet','$this->msg','$this->datee','$this->lu')");
		
	
  
}

    
			
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact WHERE id=\''.$_GET['id'].'\''); 
 
			
 
 
}


}





?>