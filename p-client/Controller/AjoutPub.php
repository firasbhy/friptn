<?php
require_once('../../p-admin/Model/Pub.class.php');
//$dossier_upload="pub/";
$localisation="upload/";

$chemin=$localisation.$_FILES['file']['name'];
$chemin_racine="../../p-admin/Controller/upload/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$chemin_racine);



$Pub = new Pub($_POST['id_invistisseur'],$_POST['titre'],$_POST['date'],$_POST['lien'],$_POST['type'],$chemin);
$Pub->ajouter();

header("location:../wait_conf_inv.php?Ajout=oui");
?>
