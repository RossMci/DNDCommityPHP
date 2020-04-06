<?php

require_once('phpsrc/WebsitePages.php');
require_once('model/database.php');
require_once('model/Event.php');
require_once('model/EventRepository.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL)
{
	$action = filter_input(INPUT_GET, 'action');
	if ($action == NULL)
	{
		$action = 'add_edit_event_form';
	}
}

if ($action == 'add_edit_event_form')
{
	$event_id = filter_input(INPUT_GET, 'event_id');

	if ($event_id == NULL)
	{
		$event_id = filter_input(INPUT_POST, 'event_id');
	}
	$event = EventRepository::getEventById($event_id);
	if ($event == null)
	{
		$event = new Event("", "", "", "", "", "", "");
	}
	include(WebsitePages::addEvent);
}
else if ($action == 'update_event')
{
	$event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);
	$Title = filter_input(INPUT_POST, 'Title');
	$Description = filter_input(INPUT_POST, 'Description');
	$Venue = filter_input(INPUT_POST, 'Venue');
	$Date = filter_input(INPUT_POST, 'Date');
	$Time = filter_input(INPUT_POST, 'Time');
	$Location = filter_input(INPUT_POST, 'Location');

	EventRepository::UpdateEvent($event_id, $Title, $Description, $Venue, $Date, $Time, $Location);


	$fileName = $_FILES['imageLink']['name'];
	$eventToUpdate = EventRepository::getEventById($event_id);

	if ($fileName != "")
	{
		HandleImageEncode($_FILES['imageLink'], $eventToUpdate);
		EventRepository::UpdateEventImage($eventToUpdate);
	}
	header("Location: " . WebsitePages::adminIndex . "?action=viewEvents");
}
elseif ($action == 'DisplayEvent')
{
	$events = EventRepository::getEvents();
	include(WebsitePages::clubEvents);
}
else if ($action == 'createEvent')
{
	$eventID = filter_input(INPUT_POST, 'eventID');
	$Title = filter_input(INPUT_POST, 'Title');
	$Description = filter_input(INPUT_POST, 'Description');
	$Venue = filter_input(INPUT_POST, 'Venue');
	$Date = filter_input(INPUT_POST, 'Date');
	$Time = filter_input(INPUT_POST, 'Time');
	$Location = filter_input(INPUT_POST, 'Location');

	if ($Title == NULL || $Description == NULL || $Venue == NULL || $Date == NULL || $Time == NULL || $Location == NULL)
	{
		$error = "Invalid user data. Check all fields and try again.";
		include('errors/error.php');
	}
	else
	{
		$event = new Event($eventID, $Title, $Description, $Venue, $Date, $Time, $Location);

		$fileName = $_FILES['imageLink']['name'];

		if ($fileName != "")
		{
			HandleImageEncode($_FILES['imageLink'], $event);
		}
		EventRepository::createEvent($event);
		header("Location: eventsindex.php");
	}
}

function HandleImageEncode($postFileImage, Event $event)
{
	$fileName = $postFileImage['name'];
	$fileServerPath = $postFileImage['tmp_name'];
	$fileSize = $postFileImage['size'];
	$fileError = $postFileImage['error'];
	$fileParts = (explode('.', $fileName));
	$fileExt = end($fileParts);

	if ($fileError !== 0)
	{
		$error = "There was an error uploading your file!";
		include('errors/error.php');
	}
	else if (!EventRepository::IsImageValidFileType($fileExt))
	{
		$error = "You cannot Upload files of this type!";
		include('errors/error.php');
	}
	else if (!EventRepository::IsImageValidFileSize($fileSize))
	{
		$error = "Your file is too big!";
		include('errors/error.php');
	}
	else
	{
		$event->setImageName($fileName);
		$event->setImageData(base64_encode(file_get_contents($fileServerPath)));
	}
}
