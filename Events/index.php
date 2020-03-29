
<?php

require('../Model/database.php');
require('../Model/events.php');
require('../Model/events_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'add_edit_event_form';
    }
}

if ($action == 'add_edit_event_form') {
    $event_id = filter_input(INPUT_GET, 'event_id');

    if ($event_id == NULL) {
        $event_id = filter_input(INPUT_POST, 'event_id');
    }
    $event = events_db::getEvent($event_id);

    include('addEvent.php');
} else if ($action == 'update_event') {
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
    header("Location: ../Admin/index.php?action=viewEvents");
} else if ($action == 'createEvent') {
    $eventID = filter_input(INPUT_POST, 'eventID');
    $Title = filter_input(INPUT_POST, 'Title');
    $Description = filter_input(INPUT_POST, 'Description');
    $Venue = filter_input(INPUT_POST, 'Venue');
    $Date = filter_input(INPUT_POST, 'Date');
    $Time = filter_input(INPUT_POST, 'Time');
    $Location = filter_input(INPUT_POST, 'Location');
    //$imageLink = filter_input(INPUT, 'imageLink');
    $imageLink = $_FILES["imageLink"]["name"];
  
  
    if ($Title == NULL || $Description == NULL || $Venue == NULL || $Date == NULL || $Time == NULL || $Location == NULL || $imageLink == NULL) {
        $error = "Invalid user data. Check all fields and try again.";
        include('../errors/error.php');
    } else {

        $event = new events($eventID, $Title, $Description, $Venue, $Date, $Time, $Location, $imageLink);
        events_db::createEvent($event);
       header("Location: /DNDCommityPHP/Events/index.php");
    }
}
?>
