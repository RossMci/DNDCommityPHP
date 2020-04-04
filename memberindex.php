
<?php

require('Model/database.php');
require('Model/member.php');
require('Model/memberrepository.php');


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
	include('createMember.php');
}
else if ($action == 'edit_member')
{
	$member_id = filter_input(INPUT_POST, 'member_id');
	$Fname = filter_input(INPUT_POST, 'Fname');
	$Lname = filter_input(INPUT_POST, 'Lname');
	$userName = filter_input(INPUT_POST, 'userName');
	$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber',
			FILTER_VALIDATE_INT);
	$memberEmail = filter_input(INPUT_POST, 'memberEmail');
	$memberPassword = filter_input(INPUT_POST, 'memberPassword');
	$hostAccess = filter_input(INPUT_POST, 'hostAccess');
	memberrepository::update_member($member_id, $Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess);
}
else if ($action == 'memberaccount')
{
	$member_id = filter_input(INPUT_GET, 'member_id');

	if ($member_id == NULL)
	{
		$member_id = filter_input(INPUT_POST, 'member_id');
	}
	$member = memberrepository::getmember($member_id);

	include('member-account-detials.php');
}
else if ($action == 'create_member')
{
	$memberID = filter_input(INPUT_POST, 'memberID');
	$Fname = filter_input(INPUT_POST, 'Fname');
	$Lname = filter_input(INPUT_POST, 'Lname');
	$userName = filter_input(INPUT_POST, 'userName');
	$PhoneNumber = filter_input(INPUT_POST, 'PhoneNumber',
			FILTER_VALIDATE_INT);
	$memberEmail = filter_input(INPUT_POST, 'memberEmail');
	$memberPassword = filter_input(INPUT_POST, 'memberPassword');
	$hostAccess = filter_input(INPUT_POST, 'hostAccess');
    

	if ($Fname == NULL || $Lname == NULL || $memberEmail == NULL || $PhoneNumber == NULL || $userName == NULL || $memberPassword == NULL)
	{
		$error = "Invalid user data. Check all fields and try again.";
		include('errors/error.php');
		
	}
	else
	{

		$member = new member($memberID, $Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess);
		memberrepository::createmember($member);
		header("Location: memberindex.php");
	}
}
?>
