<?php

	$connection = mysqli_connect('localhost', 'root', '') or die ("Unable To Connect Database");
	$db = mysqli_select_db($connection, 'school') or die ("Unable To Select Database");

?>