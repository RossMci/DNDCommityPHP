<?php

// Start session management and include necessary functions
session_start();
require_once('../Model/database.php');
require_once('../Model/admin_db.php');
require_once ('../Model/admin.php');

$login_message = "";
// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'show_admin_menu';
	}
}

// If the user isn't logged in, force the user to login
if (!isset($_SESSION['is_valid_admin'])) {
	$action = 'login';
}

// Perform the specified action
switch ($action) {
	case 'login':
		$user_name = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		//$admin = AdminRepoidtory::getAdminById(9);
		$admin = AdminRepoidtory::VerifyUser($user_name, $password);
		if (isset($admin)) {
			$_SESSION['is_valid_admin'] = true;
//			echo "<h1>loggin in</h1>" . $admin->getUsername();
			include('../Admin/adminMenu.php');
		} else {
			$login_message = "#" . $user_name  . 'You must login to view this page.';
			include('../Login/mangment-login.php');
		}
//		if (isset(is_valid_admin_login($user_name, $password))) {
//			$_SESSION['is_valid_admin'] = true;
//			include('../Admin/adminMenu.php');
//		} 
//		else {
//			$login_message = "#" . $user_name . $password . 'You must login to view this page.';
//			include('../Login/mangment-login.php');
//		}


		break;
	case 'viewEvents':
		echo "<h1>blah</h1>";
//		include('../Admin/index.php');
		header('Location: ../Admin/index.php?action=viewEvents');
		break;

	case 'show_admin_menu':
		include('../Admin/AdminMenu.php');
		break;
	case 'admin_registration' :
		include('../Admin/addAdmin.php');
		break;
	case 'add_admin':
		$user_name = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		$firstname = filter_input(INPUT_POST, 'firstname');
		$lastname = filter_input(INPUT_POST, 'lastname');
		add_admin($user_name, $password, $firstname, $lastname);
		include('../Admin/adminMenu.php');
		break;
	case 'logout':
		$_SESSION = array();   // Clear all session data from memory
		session_destroy();  // Clean up the session ID
		$login_message = 'You have been logged out.';
		include('../Login/mangment-login.PHP');
		break;

	case 'login':
		$user_name = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		//$admin = AdminRepoidtory::getAdminById(9);
		$admin = AdminRepoidtory::VerifyUser($user_name, $password);
		if (isset($admin)) {
			$_SESSION['is_valid_admin'] = true;
//			echo "<h1>loggin in</h1>" . $admin->getUsername();
			include('../Admin/adminMenu.php');
		} else {
			$login_message = "#" . $user_name  . 'You must login to view this page.';
			include('../Login/mangment-login.php');
		}
//		if (isset(is_valid_admin_login($user_name, $password))) {
//			$_SESSION['is_valid_admin'] = true;
//			include('../Admin/adminMenu.php');
//		} 
//		else {
//			$login_message = "#" . $user_name . $password . 'You must login to view this page.';
//			include('../Login/mangment-login.php');
//		}


		break;
		}
?>