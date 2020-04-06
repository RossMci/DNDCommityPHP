<?php

// Start session management and include necessary functions
session_start();
require_once('Model/database.php');
require_once('Model/User.php');
require_once('Model/UserRepository.php');
require_once('Model/UserAccessLevel.php');
require_once('Model/UserSessionManagement.php');
require_once('phpsrc/WebsitePages.php');


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
		$username = filter_input(INPUT_POST, 'userName');
		$password = filter_input(INPUT_POST, 'memberPassword');
		$user = UserRepository::GetUserByCredentials($userName, $memberPassword);
		if ($user != null)
		{
			UserSessionManagement::LoginUser($user);
			include(WebSitePages::memberaccountdetials);
		}
		else
		{
			$login_message = "#" . $userName . 'You must login to view this page.';
			include(WebSitePages::error);
		}

		break;
	case 'viewEvents':
	
//		include('../Admin/index.php');
		header('Location: adminindex.php?action=viewEvents');
		break;

	case 'show_admin_menu':
		include(WebsitePages::adminMenu);
		break;
	case 'admin_registration' :
		include(WebsitePages::addAdmin);
		break;
	case 'add_admin':
		$memberID = filter_input(INPUT_POST, 'memberID');
	$Fname = filter_input(INPUT_POST, 'Fname');
	$Lname = filter_input(INPUT_POST, 'Lname');
	$userName = filter_input(INPUT_POST, 'userName');
	$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber');
	$memberEmail = filter_input(INPUT_POST, 'memberEmail');
	$memberPassword = filter_input(INPUT_POST, 'memberPassword');

	
			$username = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		$firstname = filter_input(INPUT_POST, 'firstname');
		$lastname = filter_input(INPUT_POST, 'lastname');

		
	
				$user = new User($Fname, $memberID, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword);
		UserRepository::CreateUser($user);

         include('adminMenu.php');
		break;
	case 'logout':
		UserSessionManagement::LogoutCurrentUser();
		$login_message = 'You have been logged out.';
		include(WebsitePages::adminLogin);
		break;

	case 'login':
		$username = filter_input(INPUT_POST, 'user_name');
		$password = filter_input(INPUT_POST, 'password');
		//$admin = AdminRepoidtory::getAdminById(9);
		$user = UserRepository::GetUserByCredentials($username, $password);
		if ($user != null)
		{
			UserSessionManagement::LoginUser($user);
			$_SESSION['is_valid_admin'] = true;
			if($user->getUserAccessLevel()==UserAccessLevel::Admin)
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
			$login_message = "#" . $username . 'You must login to view this page.';
			include(WebsitePages::adminLogin);
		}


		break;
}
?>