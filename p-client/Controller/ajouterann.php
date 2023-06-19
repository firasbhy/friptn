<?php
ob_start();
session_start();
require_once('../../p-admin/Model/Annonce.class.php');
 

$localisation="upload/";

$chemin=$localisation.$_FILES['file']['name'];
$chemin_racine="../../p-admin/Controller/upload/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$chemin_racine);




$Annonce = new Annonce($_SESSION['id'],$_POST['titre'],$_POST['description'],$_POST['catégorie'],$_POST['prix'],"off",$chemin);
$Annonce->ajouter();

header("location:../index_ann.php");
?>