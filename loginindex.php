<?php

// Start session management and include necessary functions
session_start();
require_once('Model/AdminSessionManagement.php');
require_once('Model/database.php');
require_once('Model/admin_db.php');
require_once('Model/admin.php');
require_once ('Model/UserAccessLevel.php');
require_once ('phpsrc/WebsitePages.php');


$login_message = "";
// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL)
{
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL)
	{
		$action = 'show_admin_menu';
	}
}

// If the user isn't logged in, force the user to login
if (!isset($_SESSION['is_valid_admin']))
{
	$action = 'login';
}

// Perform the specified action
switch ($action)
{
	case 'loginMemeber':
		$user_name = filter_input(INPUT_POST, 'userName');
		$password = filter_input(INPUT_POST, 'memberPassword');
		//$admin = AdminRepoidtory::getAdminById(9);
		$member = memberRepoidtory::VerifyUser($userName, $memberPassword);
		if ($member != null)
		{
			$_SESSION['is_valid_member'] = true;
			$_SESSION["Member"] = $member;
//			echo "<h1>loggin in</h1>" . $admin->getUsername();
			include('member-account-detials.php');
		}
		else
		{
			$login_message = "#" . $userName . 'You must login to view this page.';
			include('.php');
		}

		break;
	case 'viewEvents':
	
//		include('../Admin/index.php');
		header('Location: adminindex.php?action=viewEvents');
		break;

	case 'show_admin_menu':
		echo "<h1>"."here"."</h1>";
		include('adminMenu.php');
		break;
	case 'admin_registration' :
		include('addAdmin.php');
		break;
	case 'add_admin':
		$user_name = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		$firstname = filter_input(INPUT_POST, 'firstname');
		$lastname = filter_input(INPUT_POST, 'lastname');
		add_admin($user_name, $password, $firstname, $lastname);
         include('adminMenu.php');
		break;
	case 'logout':
		AdminSessionManagement::LogoutCurrentAdmin();
		$login_message = 'You have been logged out.';
		include(WebsitePages::adminLogin);
		break;

	case 'login':
		$user_name = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		//$admin = AdminRepoidtory::getAdminById(9);
		$admin = AdminRepoidtory::VerifyUser($user_name, $password);
		if ($admin != null)
		{
			AdminSessionManagement::LoginAdmin($admin);
			$_SESSION['is_valid_admin'] = true;
			if($admin->getUserAccessLevel()==UserAccessLevel::Admin)
			{
			include(WebsitePages::adminMenu);
			}
			else
			{
				include (WebsitePages::memberAccount);	
			}
		}
		else
		{
			$login_message = "#" . $user_name . 'You must login to view this page.';
			include(WebsitePages::adminLogin);
		}


		break;
}
?>