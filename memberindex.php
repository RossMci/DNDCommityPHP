<?php

require('model/database.php');
require_once('Model/User.php');
require_once('Model/UserRepository.php');
require_once('Model/UserAccessLevel.php');
require_once('Model/UserSessionManagement.php');



$action = filter_input(INPUT_POST, 'action');
if ($action == NULL)
{
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL)
	{
		$action = 'createMember';
	}
}

if ($action == 'createMember')
{
	include(WebSitePages::createMember);
}
else if ($action == 'edit_member')
{
	$userID = filter_input(INPUT_POST, 'member_id');

	$user = UserRepository::GetUserById($userID);
// set all fields onm user
	$usaer->setFirstname(filter_input(INPUT_POST, 'Fname'));
	$user->setLastname(filter_input(INPUT_POST, 'Lname'));
	$userName = filter_input(INPUT_POST, 'userName');
	$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber');
	$memberEmail = filter_input(INPUT_POST, 'memberEmail');
	$memberPassword = filter_input(INPUT_POST, 'memberPassword');
	
	UserRepository::UpdateUser($user);
}
else if ($action == 'memberaccount')
{
	$userID = filter_input(INPUT_GET, 'member_id');

	if ($userID == NULL)
	{
		$userID = filter_input(INPUT_POST, 'member_id');
	}
	$user = UserRepository::GetUsers($userID);

	include( WebsitePages::memberaccountdetials);
}
else if ($action == 'create_member')
{
	$memberID = filter_input(INPUT_POST, 'memberID');
	$Fname = filter_input(INPUT_POST, 'Fname');
	$Lname = filter_input(INPUT_POST, 'Lname');
	$userName = filter_input(INPUT_POST, 'userName');
	$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber');
	$memberEmail = filter_input(INPUT_POST, 'memberEmail');
	$memberPassword = filter_input(INPUT_POST, 'memberPassword');
	


	if ($Fname == NULL || $Lname == NULL || $memberEmail == NULL || $PhoneNumber == NULL || $userName == NULL || $memberPassword == NULL)
	{
		$error = "Invalid user data. Check all fields and try again.";
		include('errors/error.php');
	}
	else
	{

		$user = new User($Fname, $memberID, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword);
		$user->setUserAccessLevel(UserAccessLevel::User);

		UserRepository::CreateUser($user);
		header("Location: ". WebsitePages::memberIndex);
	}
}
?>
