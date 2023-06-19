<?php
ob_start();
require_once('../../p-admin/Model/Annonce.class.php');
 include('../includes/connect_db.php');
 $id=$_GET['id'];
 $req = $bdd->query("SELECT * FROM annonce  where id=$id ");
 $donnees=$req->fetch();



if($_FILES['file']['name']!='')
{
	$localisation="upload/";

$chemin=$localisation.$_FILES['file']['name'];
$chemin_racine="../../p-admin/Controller/upload/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$chemin_racine);
$annonce = new Annonce($donnees['id_annonceur'],$_POST['titre'],$_POST['description'],$_POST['categorie'],$_POST['prix'],$donnees['type'],$chemin);
$annonce->modifier();

}
else 
{

 $id = $_GET['id'];

$req = $bdd->query("SELECT * FROM annonce WHERE id = $id");
$donnees = $req->fetch();


$annonce = new Annonce($donnees['id_annonceur'],$_POST['titre'],$_POST['description'],$_POST['catégorie'],$_POST['prix'],$donnees['type'],$donnees['image']);
$annonce->modifier();


 
}

header("location:../index_ann.php");

//exit();
?>