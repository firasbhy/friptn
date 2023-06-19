<?php
ob_start();

require_once('../Model/Contact.class.php');

$contact = new Contact($_POST['email'],$_POST['sujet'],$_POST['msg'],$_POST['date'],$_POST['nom']);
$contact->supprimer();

header("location:../liste-msg.php?Supp=oui");

?>