<?php
ob_start();
require_once('../Model/Pages.class.php');



 
$pages = new Pages($_POST['titre'],$_POST['description'] );
$pages->modifier();
 


header("location:../Liste-page.php?firas=ouiModif");

//exit();
?>