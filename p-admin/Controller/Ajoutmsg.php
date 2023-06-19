<?php
require_once('../Model/Contact.class.php');
$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['msg'],$_POST['datee'],0);
$contact->ajouter();
header("location:../liste-msg.php");

?>