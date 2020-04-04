<?php

// make sure the user is logged in as a valid member
if (!isset($_SESSION['is_valid_member']))
{
	echo'<h1> calling valid admin </h1>';
	///header("Location: .");
}
?>