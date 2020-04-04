<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of member
 *
 * @author ross1
 */
class member
{

	private $memberID, $Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess;

	public function member($memberID, $Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess)
	{
		$this->memberID = $memberID;
		$this->Fname = $Fname;
		$this->Lname = $Lname;
		$this->userName = $userName;
		$this->PhoneNumber = $PhoneNumber;
		$this->memberEmail = $memberEmail;
		$this->memberPassword = $memberPassword;
		$this->hostAccess = $hostAccess;
	}

	function getmemberID()
	{
		return $this->memberID;
	}

	function getFname()
	{
		return $this->Fname;
	}

	function getLname()
	{
		return $this->Lname;
	}

	function getuserName()
	{
		return $this->userName;
	}

	function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}

	function getmemberEmail()
	{
		return $this->memberEmail;
	}

	function getmemberPassword()
	{
		return $this->memberPassword;
	}

	function gethostAccess()
	{
		return $this->hostAccess;
	}

	function setmemberID($value)
	{
		$this->memberID = $value;
	}

	function setFname($value)
	{
		$this->Fname = $value;
	}

	function setLname($value)
	{
		$this->Lname = $value;
	}

	function setuserName($value)
	{
		$this->userName = $value;
	}

	function setPhoneNumber($value)
	{
		$this->PhoneNumber = $value;
	}

	function setmemberEmail($value)
	{
		$this->memberEmail = $value;
	}

	function setmemberPassword($value)
	{
		$this->memberPassword = $value;
	}

	function sethostAccess($value)
	{
		$this->hostAccess = $value;
	}

}
