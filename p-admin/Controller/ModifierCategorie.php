<?php
ob_start();
require_once('../Model/Categorie.class.php');
$localisation="upload/";

if($_FILES['file']['name']!='')
{
	$chemin=$localisation.$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], $chemin);
$categorie = new Categorie($_POST['nom'],$_POST['discription'],$chemin);
$categorie->modifier();

}
else 
{
 include('../includes/connect_db.php');
 $id = $_GET['id'];

 $req = $bdd->query("SELECT * FROM categorie WHERE id = $id");
$donnees = $req->fetch();

$categorie = new Categorie($_POST['nom'],$_POST['discription'], $donnees['image']);
$categorie->modifier();
 
}

header("location:../Liste-categorie.php?firas=ouiModif");

//exit();
?>