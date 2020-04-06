<?php

class EventRepository
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
			$events[] = EventRepository::Transform($row);
		}
		return $events;
	}

	protected static function Transform($row): Event
	{
		$event = new Event($row['eventID'], $row['Title'], $row['Description'], $row['Date'], $row['Venue'], $row['Time'], $row['Location']);
		$event->setImageName($row['imageLink']);
		$event->setImageData($row['imageData']);
		return $event;
	}

	public static function getEventById($event_id): ?Event
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM event
                  WHERE eventID = :event_id';
		$statement = $db->prepare($query);
		$statement->bindValue(":event_id", $event_id);
		$statement->execute();
		$count = $statement->rowCount();
		$row = $statement->fetch();
		if ($count > 0)
		{
			return self::Transform($row);
		}
		else
		{
			return null;
		}
	}

	public static function createEvent($event)
	{
		$db = Database::getDB();

		$query = 'INSERT INTO event 
                 (Title, Description, Venue, Date, Time, Location, imageLink,imageData)
                 VALUES
                 (:Title, :Description, :Venue, :Date, :Time, :Location,:imageLink,:imageData )';

//		echo "<h1>" . $query . "</h1>";
		$statement = $db->prepare($query);
		$statement->bindValue(':Title', $event->getTitle());
		$statement->bindValue(':Location', $event->getLocation());
		$statement->bindValue(':Description', $event->getDescription());
		$statement->bindValue(':Venue', $event->getVenue());
		$statement->bindValue(':Date', $event->getDate());
		$statement->bindValue(':Time', $event->getTime());
		$statement->bindValue(':imageLink', $event->getImageName());
		//$statement->bindValue(':imageData', "", pdo::PARAM_LOB);
		$statement->bindValue(':imageData', $event->getimageData(), pdo::PARAM_LOB);

//		echo "<h1>" . $event->getTitle() . "</h1>";
//		echo "<h1>" . $event->getLocation() . "</h1>";
//		echo "<h1>" . $event->getDescription() . "</h1>";
//		echo "<h1>" . $event->getVenue() . "</h1>";
//		echo "<h1>" . $event->getDate() . "</h1>";
//		echo "<h1>" . $event->getTime() . "</h1>";
//		echo "<h1>" . $event->getimageLink() . "</h1>";
		$sucess = $statement->execute();
		//echo "<h1>#" . $statement->execute() . "#</h1>";
		//echo "<h1>#" . $statement->rowCount() . "#</h1>";

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

	public static function UpdateEvent($event_id, $Title, $Description, $Venue, $Date, $Time, $Location)
	{
		$db = Database::getDB();
		$query = 'UPDATE event
              SET Date = :Date,
			  Description = :Description,
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

	public static function UpdateEventImage(Event $event)
	{
		$db = Database::getDB();
		$query = 'UPDATE event
              SET imageLink= :imageLink,
			  imageData = :imageData
			  WHERE eventID= :event_id';
		try
		{
			$statement = $db->prepare($query);
			$statement->bindValue(':imageLink', $event->getImageName());
			//$statement->bindValue(':imageData', "", pdo::PARAM_LOB);
			$statement->bindValue(':imageData', $event->getimageData(), pdo::PARAM_LOB);
			$statement->bindValue(':event_id', $event->geteventID());

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

	/**
	 * 
	 * @param type $fileActualExt
	 * @return bool
	 */
	public static function IsImageValidFileType($fileActualExt): bool
	{
		if (in_array($fileActualExt, self::allowedImageFiletypes))
		{
			return true;
		}
		return false;
	}

	public const maxImageSize = 1000000; //10MB
	public const allowedImageFiletypes = array('jpg', 'jpeg', 'png');

	public static function IsImageValidFileSize($fileSize): bool
	{
		if ($fileSize < self::maxImageSize)
		{
			return true;
		}
		return false;
	}

}
