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
class admin
{

	private $id, $firstname, $lastname, $username, $email, $password, $userAccessLevel;
	public function getUserAccessLevel()
	{
		return $this->userAccessLevel;
	}

	public function setUserAccessLevel($userAccessLevel): void
	{
		$this->userAccessLevel = $userAccessLevel;
	}

		public function admin($firstname, $id, $lastname, $password, $username)
	{
		$this->$id = $id;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->password = $password;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getFirstname()
	{
		return $this->firstname;
	}

	public function getLastname()
	{
		return $this->lastname;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
	}

	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

}
