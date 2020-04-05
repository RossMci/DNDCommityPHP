<?php

class AdminRepoidtory
{

	public static function getAdmins()
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin';
		$statement = $db->prepare($query);
		$statement->execute();

		$adminList = array();
		foreach ($statement as $row)
		{
			$adminList[] = self::Transform($row);
		}
		return $adminList;
	}

	protected static function Transform($row): ?admin
	{
		$admin= new admin($row['firstName'], $row['AdminID'], $row['lastName'], $row['password'], $row['user_name']);
		$admin->setUserAccessLevel($row["UserAccessLevel"]);
		return $admin;
	}

	public static function getAdminById($id): ?admin
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin WHERE adminId = :adminId';
		$statement = $db->prepare($query);
		$statement->bindValue(":adminId", $id);
		$statement->execute();
		$count = $statement->rowCount();
		$row = $statement->fetch();
		$statement->closeCursor();
		if ($count > 0)
		{
			return self::Transform($row);
		}
		else
		{
			return null;
		}
	}

	public static function VerifyUser($user_name, $password): ?admin
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin
              WHERE user_name= :user_name
 And password = :password';
		$statement = $db->prepare($query);

		$statement->bindValue(':user_name', $user_name);
//		$password = password_hash($password, PASSWORD_DEFAULT);
		$hash = hash('ripemd160', $password);
//			 $hash=$password;
		$statement->bindValue(':password', $hash);
		$statement->execute();
		$count = $statement->rowCount();
		$row = $statement->fetch();
		$statement->closeCursor();



		if ($count > 0)
		{
			return self::Transform($row);
		}
		else
		{
			return null;
		}
	}

	public static function InsertAdmin($user_name, $password, $firstname, $lastname)
	{
		$db = Database::getDB();
//	$hash = password_hash($password, PASSWORD_DEFAULT);

		$hash = hash('ripemd160', $password);
		echo '<h1>' . $hash . '</h1>';
		$query = 'INSERT INTO dndadmin (user_name, password,firstName, lastName, UserAccessLevel)
              VALUES (:user_name, :password,:firstName, :lastName, 1)';
		$statement = $db->prepare($query);
		$statement->bindValue(':user_name', $user_name);
		$statement->bindValue(':password', $hash);
		$statement->bindValue(':firstName', $firstname);
		$statement->bindValue(':lastName', $lastname);
		$statement->execute();
		$statement->closeCursor();
	}

}

function add_admin($user_name, $password, $firstname, $lastname)
{
	global $db;
//	$hash = password_hash($password, PASSWORD_DEFAULT);

	$hash = hash('ripemd160', $password);
	echo '<h1>' . $hash . '</h1>';
	$query = 'INSERT INTO dndadmin (user_name, password,firstName, lastName)
              VALUES (:user_name, :password,:firstName, :lastName)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user_name', $user_name);
	$statement->bindValue(':password', $hash);
	$statement->bindValue(':firstName', $firstname);
	$statement->bindValue(':lastName', $lastname);
	$statement->execute();
	$statement->closeCursor();
}

function _deprecated_is_valid_admin_login($user_name, $password)
{
	global $db;
	$query = 'SELECT Adminid FROM dndadmin
              WHERE user_name= :user_name
 And password = :password';

	$statement = $db->prepare($query);
	$statement->bindValue(':user_name', $user_name);
//$password = password_hash($password, PASSWORD_DEFAULT);
	$statement->bindValue(':password', $password);

	$statement->execute();

	$row = $statement->fetch();
	$statement->closeCursor();
	return $row;
//	return password_verify($password, $hash);
}
