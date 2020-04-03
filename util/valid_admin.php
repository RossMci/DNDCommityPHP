<?php

// make sure the user is logged in as a valid administrator
if (!isset($_SESSION['is_valid_admin']))
{
	echo'<h1> calling valid admin </h1>';
	//header("Location: ../Login/index.php" );
}
?>
