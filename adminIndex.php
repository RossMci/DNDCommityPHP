<?php

require_once('../Model/database.php');
require_once('../Model/member.php');
require_once('../Model/MemberRepository.php');
require_once('../Model/events.php');
require_once('../Model/events_db.php');

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
	include('managentdetials.php');
}
else if ($action == 'delete_member')
{
	$member_id = filter_input(INPUT_POST, 'member_id', FILTER_VALIDATE_INT);

	member_db::DeleteMember($member_id);

	header('Location: index.php');
}
else if ($action == 'viewEvents')
{
	$events = events_db::getEvents();
	include('current-events.php');
}
else if ($action == 'deleteEvent')
{
	$event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);

	events_db::DeleteEvent($event_id);

	header("Location: index.php?action=viewEvents");
}
?>