<?php
require_once('phpsrc/WebsitePages.php');
require_once('Model/database.php');
require_once('Model/member.php');
require_once('Model/MemberRepository.php');
require_once('Model/events.php');
require_once('Model/events_db.php');

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
	$members = MemberRepository::getMembers();
	include(WebsitePages:: managentdetials);
}
else if ($action == 'delete_member')
{
	$member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);

	MemberRepository::DeleteMember($member_id);

	header("Location: " . WebsitePages::adminIndex . "");
}
else if ($action == 'viewEvents')
{
	$events = events_db::getEvents();
	include(WebsitePages::currentEvents);
}
else if ($action == 'deleteEvent')
{
	$event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);

	events_db::DeleteEvent($event_id);
    header("Location: " . WebsitePages::adminIndex . "?action=viewEvents");
}
?>