<?php
ob_start();
require_once('../Model/Pub.class.php');
 include('../includes/connect_db.php');
$localisation="upload/";


if($_FILES['file']['name']!='')
{
	$chemin=$localisation.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $chemin);
$pub = new Pub($_POST['id_invistisseur'],$_POST['titre'],$_POST['date'],$_POST['lien'],$_POST['type'],$chemin);
$pub->modifier();

}
else 
{

 $id = $_GET['id'];

$req = $bdd->query("SELECT * FROM pub WHERE id = $id");
$donnees = $req->fetch();


$pub = new Pub($_POST['id_invistisseur'],$_POST['titre'],$_POST['date'],$_POST['lien'],$_POST['type'],$donnees['image']);
$pub->modifier();


 
}

header("location:../Liste-pub.php?firas=ouiModif");

//exit();
?>