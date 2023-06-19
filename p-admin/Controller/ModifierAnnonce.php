<?php
ob_start();
require_once('../Model/Annonce.class.php');
 include('../includes/connect_db.php');
$localisation="upload/";


if($_FILES['file']['name']!='')
{
	$chemin=$localisation.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $chemin);
$annonce = new Annonce($_POST['id_annonceur'],$_POST['titre'],$_POST['description'],$_POST['id_categorie'],$_POST['prix'],$_POST['type'],$chemin);
$annonce->modifier();

}
else 
{

 $id = $_GET['id'];

$req = $bdd->query("SELECT * FROM annonce WHERE id = $id");
$donnees = $req->fetch();


$annonce = new Annonce($_POST['id_annonceur'],$_POST['titre'],$_POST['description'],$_POST['id_categorie'],$_POST['prix'],$_POST['type'],$donnees['image']);
$annonce->modifier();


 
}

header("location:../Liste-annonce.php?firas=ouiModif");

//exit();
?>