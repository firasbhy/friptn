<?php
if($_FILES['fileToUpload']['name'] !='')
{
	$test = explode(".", $_FILES['fileToUpload']['name']);
	$extension = end($test);
	$name = rand(100, 900) . '.' . $extension;
	$location = "img/img/".$name;
	move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $location);
	echo '<img src="'.$location.'" height="150" width="255" class="img-thumbnail"/>';
}

?>