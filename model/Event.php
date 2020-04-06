<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of events
 *
 * @author ross1
 */
class Event
{

	private $eventID, $Title, $Description, $Venue, $Date, $Time, $Location, $imageLink, $imageData;

	public function Event($eventID, $Title, $Description, $Venue, $Date, $Time, $Location)
	{
		$this->eventID = $eventID;
		$this->Title = $Title;
		$this->Description = $Description;
		$this->Venue = $Venue;
		$this->Date = $Date;
		$this->Time = $Time;
		$this->Location = $Location;
		$this->imageLink = "";
		$this->imageData="";
		
	}

	public function getImageData()
	{
		return $this->imageData;
	}

	public function setImageData($imageData)
	{
		$this->imageData = $imageData;
	}

	function geteventID()
	{
		return $this->eventID;
	}

	function seteventID($value)
	{
		$this->eventID = $value;
	}

	function getTitle()
	{
		return $this->Title;
	}

	function setTitle($value)
	{
		$this->Title = $value;
	}

	function getDescription()
	{
		return $this->Description;
	}

	function setDescription($value)
	{
		$this->Description = $value;
	}

	function getVenue()
	{
		return $this->Venue;
	}

	function setVenue($value)
	{
		$this->Venue = $value;
	}

	function getDate()
	{
		return $this->Date;
	}

	function setDate($value)
	{
		$this->Date = $value;
	}

	function getTime()
	{
		return $this->Time;
	}

	function setTime($value)
	{
		$this->Time = $value;
	}

	function getLocation()
	{
		return $this->Location;
	}

	function setLocation($value)
	{
		$this->Location = $value;
	}

	function getImageName()
	{
		return $this->imageLink;
	}

	function setImageName($value)
	{
		$this->imageLink = $value;
	}

}
