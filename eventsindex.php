
<?php

require_once ('phpsrc/WebsitePages.php');
require('model/database.php');
require('model/events.php');
require('model/events_db.php');

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
	$event = events_db::getEventById($event_id);
if($event==null)
{
	$event = new events("", "", "", "", "", "", "", "");
		
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
//    $imageLink = filter_input(INPUT_POST, 'imageLink');
	$imageLink = $_FILES["imageLink"]["name"];

	events_db::update_event($event_id, $Title, $Description, $Venue, $Date, $Time, $Location, $imageLink);
	header("Location: adminindex?action=viewEvents");
}
elseif ($action == 'DisplayEvent')	
{
	$events = events_db::getEvents();
	include('events.php');
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
	//$imageLink = filter_input(INPUT, 'imageLink');
	$imageLink = $_FILES['imageLink'];

	$fileName = $_FILES['imageLink']['name'];
	$fileTmpName = $_FILES['imageLink']['tmp_name'];
	$fileSize = $_FILES['imageLink']['size'];
	$fileError = $_FILES['imageLink']['error'];
	$fileType = $_FILES['imageLink']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	if ($Title == NULL || $Description == NULL || $Venue == NULL || $Date == NULL || $Time == NULL || $Location == NULL || $imageLink == NULL)
	{
		$error = "Invalid user data. Check all fields and try again.";
		include('errors/error.php');
	}
	else
	{

		$event = new events($eventID, $Title, $Description, $Venue, $Date, $Time, $Location, $fileName);
		$allowed = array('jpg', 'jpeg', 'png');
		if (in_array($fileActualExt, $allowed))
		{
			if ($fileError === 0)
			{
				if ($fileSize < 1000000)
				{
					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
					$fileDestination = 'images/' . $fileNameNew;
//                move_uploaded_file($fileTmpName,  $fileDestination);
					$event->setImageData(base64_encode(file_get_contents($fileTmpName)));
				}
				else
				{
					$error = "Your file is too big!";
					include('errors/error.php');
				}
			}
			else
			{
				$error = "There was an error uploading your file!";
				include('errors/error.php');
			}
		}
		else
		{
			$error = "You cannot Upload files of this type!";
			include('errors/error.php');
		}
		events_db::createEvent($event);
		header("Location: eventsindex.php");
	}
}

