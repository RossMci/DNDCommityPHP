<?php

class AdminRepoidtory {

	public static function getEvents() {
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin';
		$statement = $db->prepare($query);
		$statement->execute();

		$adminList = array();
		foreach ($statement as $row) {
			$adminList[] = AdminRepoidtory::Transform($row);
		}
		return $adminList;
	}

	protected static function Transform($row): admin {
		return new admin($row['firstName'], $row['AdminID'], $row['lastName'], $row['password'], $row['user_name']);
	}

	public static function getAdminById($id): admin {
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin
                  WHERE adminId = :adminId';
		$statement = $db->prepare($query);
		$statement->bindValue(":adminId", $id);
		$statement->execute();
		$row = $statement->fetch();
		$statement->closeCursor();
		return AdminRepoidtory::Transform($row);
	}

	public static function VerifyUser($username, $password) {
		$db = Database::getDB();
		$query = 'SELECT * FROM dndadmin
              WHERE user_name= :user_name
 And password = :password';
		$statement = $db->prepare($query);

		$statement->bindValue(':user_name', $username);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$row = $statement->fetch();
		$statement->closeCursor();
		
		return AdminRepoidtory::Transform($row);
	}

}

function add_admin($user_name, $password, $firstname, $lastname) {
	global $db;
	$hash = password_hash($password, PASSWORD_DEFAULT);
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

function is_valid_admin_login($user_name, $password) {
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
