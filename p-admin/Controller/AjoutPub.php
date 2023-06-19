<?php
require_once('../Model/Pub.class.php');
$dossier_upload="upload/";
echo basename($_FILES['file']['name']);
$chemin=$dossier_upload.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $chemin);



$Pub = new Pub($_POST['invistisseur'],$_POST['titre'],$_POST['date'],$_POST['lien'],$_POST['type'],$chemin);
$Pub->ajouter();

header("location:../Liste-Pub.php?Ajout=oui");