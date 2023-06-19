<?php
ob_start();
require_once('../Model/Pages.class.php');
$Pages = new Pages($_POST['titre'],$_POST['description']);
$Pages->supprimer();

header("location:../Liste-page.php");
//exit();
?>