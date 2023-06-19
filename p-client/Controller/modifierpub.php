<?php
ob_start();
 session_start();
require_once('../../p-admin/Model/Pub.class.php');
 include('../includes/connect_db.php');
 $id=$_GET['id'];
 $req = $bdd->query("SELECT * FROM pub where id=$id ");
 $donnees=$req->fetch();
$localisation="upload/";


if($_FILES['file']['name']!='')
{
	$chemin=$localisation.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $chemin);
$pub = new Pub($_SESSION['id'],$_POST['titre'],$donnees['date'],$_POST['lien'],$donnees['type'],$chemin);
$pub->modifier();

}
else 
{

$pub = new Pub($_SESSION['id'],$_POST['titre'],$donnees['date'],$_POST['lien'],$donnees['type'],$donnees['image']);
$pub->modifier();


}

header("location:../liste-pub.php");

//exit();
?>