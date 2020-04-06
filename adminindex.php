<?php
require_once('phpsrc/WebsitePages.php');
require_once('Model/database.php');
require_once('Model/User.php');
require_once('Model/UserRepository.php');
require_once('Model/UserAccessLevel.php');
require_once('Model/UserSessionManagement.php');

require_once('Model/Event.php');
require_once('Model/EventRepository.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL)
{
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL)
	{
		$action = 'managentdetials';
	}
}

if ($action == 'managentdetials')
{
	$users = UserRepository::GetUsers();
	include(WebsitePages:: managentdetials);
}
else if ($action == 'delete_member')
{
	echo "<h1>"."hi man"."<h1>";
	$userID = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);
	UserRepository::DeleteUser($userID);

//	header("Location: " . WebsitePages::adminIndex . "?action=managentdetials");
}
else if ($action == 'viewEvents')
{
	$events = EventRepository::getEvents();
	include(WebsitePages::currentEvents);
}
else if ($action == 'deleteEvent')
{
	$event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);

	EventRepository::DeleteEvent($event_id);
    header("Location: " . WebsitePages::adminIndex . "?action=viewEvents");
}
?>