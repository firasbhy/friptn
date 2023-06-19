<?php
class Verification{
private $nom;
private $prenom;
private $login;
private $password;
private $email;
private $tel;


function __construct($nom,$prenom,$login,$password,$email,$tel){
$this->nom = $nom;
$this->prenom = $prenom;
$this->login = $login;
$this->password = $password;
$this->email = $email;
$this->tel= $tel;

}





public function ajouter(){ 

include('../includes/connect_db.php');
    
    
    
    $req = $bdd->query("SELECT * FROM verification WHERE login LIKE '$this->login' or email LIKE '$this->email' ");
    $count = $req->rowCount();
    
    if ($count == 0) {
        //$type= intval($this->type);
        $req = $bdd->exec ("INSERT INTO `verification`(`nom`, `prenom`,`login`,`password`, `email`, `tel`) VALUES ('$this->nom','$this->prenom','$this->login','$this->password','$this->email','$this->tel')");
        
        //echo'oui';
                //return TRUE;
    } else {
                echo'non';
                //return FALSE;
    }
}
public function supprimer(){ 
    
    include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM verification WHERE id=\''.$_GET['id'].'\''); 
 
        //echo'oui';    
 
 
}

public function accepter(){ 

    include('../includes/connect_db.php');

    $req = $bdd->query('SELECT * FROM verification id=\''.$_GET['id'].'\'');

    //while($connexions=$req->fetch())
//$connexion = mysqli_fetch_array($quete2);
    $nom = $_GET['nom'];
    $prénom = $_GET['prenom'];
    $login = $_GET['login'];
    $passe = $_GET['password'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    
    $req2 = $bdd->exec ("INSERT INTO `invistisseur`(`nom`,`prénom`, `login`, `tel`, `email`,`password`) VALUES ('$this->nom','$this->prénom','$this->login','$this->tel','$this->email','$this->password')");


    $req3 = $bdd->exec('DELETE FROM verification WHERE id=\''.$_GET['id'].'\'');







            }   



}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['email'],$_POST['pass'],$_POST['type']);

//$req1 = $bdd->exec("INSERT INTO invistisseur VALUES('$id', '$nom','login', '$password', '$email','$tel')");   
        
        
        
        //echo'oui';
        //return TRUE;"
/*public function verif(){ 
    
    include('../includes/connect_db.php');

if(isset($_GET['action']) AND isset($_GET['id']))
{
$action = $_GET['action'];
if($action == "accepter")
{
$id = $_GET['id'];
$quete2 = $bdd->query("SELECT * FROM verification WHERE id='$id'");
while($connexion=$quete2->fetch())
//$connexion = mysqli_fetch_array($quete2);
$nom = $connexion['nom'];
$login = $connexion['login'];
$passe = $connexion['password'];
$email = $connexion['email'];
$tel = $connexion['tel'];
//$req = $bdd->exec ("INSERT INTO `invistisseur`(`nom`,`prénom`, `login`, `tel`, `email`,`password`) VALUES ('$this->nom','$this->prénom','$this->login','$this->tel','$this->email','$this->password')");
$req1 = $bdd->exec("INSERT INTO invistisseur VALUES('$id', '$nom','login', '$password', '$email','$tel')");
$req2 = $bdd->exec('DELETE FROM verification WHERE id=\''.$_GET['id'].'\'');
}
elseif($action == "refuser")
{
    $req3 = $bdd->exec('DELETE FROM verification WHERE id=\''.$_GET['id'].'\''); 
//$id = $_GET['id'];
//mysqli_query("DELETE FROM verification WHERE id='$id'");
}
}
}
//header("location:../wait_conf.php");          
            
     
 */
 

?>
