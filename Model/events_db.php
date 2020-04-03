<?php

class events_db
{

	public static function getEvents()
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM event
                  ORDER BY eventID';
		$statement = $db->prepare($query);
		$statement->execute();

		$events = array();
		foreach ($statement as $row)
		{
			$events[] = events_db::Transform($row);
		}
		return $events;
	}

	protected static function Transform($row): events
	{
		$event = new events($row['eventID'], $row['Title'], $row['Description'], $row['Date'], $row['Venue'], $row['Time'], $row['Location'], $row['imageLink']);
		$event->setImageData($row['imageData']);
		return $event;
	}

	public static function getEventById($event_id)
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM event
                  WHERE eventID = :event_id';
		$statement = $db->prepare($query);
		$statement->bindValue(":event_id", $event_id);
		$statement->execute();
		$row = $statement->fetch();
		$statement->closeCursor();
		return events_db::Transform($row);
	}

	public static function createEvent($event)
	{
		$db = Database::getDB();
		$Title = $event->getTitle();
		$Description = $event->getDescription();
		$Venue = $event->getVenue();
		$Date = $event->getDate();
		$Time = $event->getTime();
		$Location = $event->getLocation();
		$query = 'INSERT INTO event 
                 (Title, Description, Venue, Date, Time, Location, imageLink,imageData)
                 VALUES
                 (:Title, :Description, :Venue, :Date, :Time, :Location,:imageLink,:imageData )';

		$statement = $db->prepare($query);
		$statement->bindValue(':Title', $Title);
		$statement->bindValue(':Location', $Location);
		$statement->bindValue(':Description', $Description);
		$statement->bindValue(':Venue', $Venue);
		$statement->bindValue(':Date', $Date);
		$statement->bindValue(':Time', $Time);
		$statement->bindValue(':imageLink', $event->getimageLink());
		$statement->bindValue(':imageData', $event->getimageData(), pdo::PARAM_LOB);



		$statement->execute();
		$statement->closeCursor();
	}

	public static function DeleteEvent($event_id)
	{
		$db = Database::getDB();
		$query = 'DELETE FROM event
                  WHERE eventID = :event_id';
		$statement = $db->prepare($query);
		$statement->bindValue(':event_id', $event_id);
		$statement->execute();
		$statement->closeCursor();
	}

	public static function getEvent($event_id)
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM event
                  WHERE eventID = :event_id';
		$statement = $db->prepare($query);
		$statement->bindValue(":event_id", $event_id);
		$statement->execute();
		$row = $statement->fetch();
		$statement->closeCursor();

		return $row;
	}

	public static function update_event($event_id, $Title, $Description, $Venue, $Date, $Time, $Location, $imageLink)
	{
		$db = Database::getDB();
		$query = 'UPDATE event
              SET Date = :Date,
			  Description = :Description,
			  imageLink= :imageLink,
			  Location = :Location,
			  Time = :Time,
			  Title = :Title,
			  Venue = :Venue
			  WHERE eventID= :event_id';
		try
		{
			$statement = $db->prepare($query);
			$statement->bindValue(':Title', $Title);
			$statement->bindValue(':Location', $Location);
			$statement->bindValue(':Description', $Description);
			$statement->bindValue(':Venue', $Venue);
			$statement->bindValue(':Date', $Date);
			$statement->bindValue(':Time', $Time);
			$statement->bindValue(':imageLink', $imageLink);
			$statement->bindValue(':event_id', $event_id);
			$row_count = $statement->execute();

			$statement->closeCursor();

			return $row_count;
		}
		catch (PDOException $e)
		{
			$error_message = $e->getMessage();
			display_db_error($error_message);
		}
	}

}
