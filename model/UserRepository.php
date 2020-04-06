<?php

class UserRepository
{

	public static function CreateUser(User $user)
	{
		$db = Database::getDB();

		$query = 'INSERT INTO user (firstname, lastname, Username, TelephoneNumber, email, Password, UserAccessLevel)
                  VALUES(:firstname, :lastname,:Username,:TelephoneNumber,:email, :Password, :UserAccessLevel)';
		$statement = $db->prepare($query);
		$statement->bindValue(':firstname', $user->getFirstname());
		$statement->bindValue(':lastname', $user->getLastname());
		$statement->bindValue(':Username', $user->getUsername());
		$statement->bindValue(':TelephoneNumber', $user->getPhoneNumber());
		$statement->bindValue(':email', $user->getEmail());
		$statement->bindValue(':Password', self::HashPassword($user->getPassword()));
		$statement->bindValue(':UserAccessLevel', $user->getUserAccessLevel());
		$statement->execute();
		$statement->closeCursor();
	}

	public static function DeleteUser($userId)
	{
		$db = Database::getDB();
		$query = 'DELETE FROM user WHERE Id = :Id';
		$statement = $db->prepare($query);
		$statement->bindValue(':Id', $userId);
		$statement->execute();
		$statement->closeCursor();
	}

	public static function GetUserByCredentials($Username, $password): ?User
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM user WHERE username = :Username And password = :Password';
		$statement = $db->prepare($query);

		$statement->bindValue(':Username', $Username);
		$statement->bindValue(':Password', self::HashPassword($password));

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

	public static function GetUserById($id): ?User
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM user WHERE id = :id';
		$statement = $db->prepare($query);
		$statement->bindValue(":id", $id);
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

	public static function GetUsers()
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM user';
		$statement = $db->prepare($query);
		$statement->execute();

		$userList = array();
		foreach ($statement as $row)
		{
			$userList[] = self::Transform($row);
		}
		return $userList;
	}

	public static function UpdateUser(User $user)
	{
		$db = Database::getDB();

		$query = 'UPDATE user
              SET  
			  firstname = :firstname,
                  lastname = :lastname,
                  Username = :Username,
                  TelephoneNumber = :TelephoneNumber,
                  email = :email,
                  Password = :Password,
                  UserAccessLevel = :UserAccessLevel
                 WHERE id= :id';

		$statement = $db->prepare($query);
		$statement->bindValue(':firstname', $user->getFirstname());
		$statement->bindValue(':lastname', $user->getLastname());
		$statement->bindValue(':Username', $user->getUsername());
		$statement->bindValue(':TelephoneNumber', $user->getPhoneNumber());
		$statement->bindValue(':email', $user->getEmail());
		$statement->bindValue(':Password', self::HashPassword($user->getPassword()));
		$statement->bindValue(':UserAccessLevel', $user->getUserAccessLevel());
		$statement->bindValue(':id', $user->getId());
		$statement->execute();
		$statement->closeCursor();
	}

	//
	//	Protected Static Methods
	//
	protected static function HashPassword(string $password): string
	{
		return hash(self::hashAlgorithm, $password);
	}

	protected static function Transform($row): ?User
	{
		$user = new User($row['firstName'], $row['Id'], $row['lastName'], $row['password'], $row['Username'], $row['TelephoneNumber'], $row['Email']);
		$user->setUserAccessLevel($row["UserAccessLevel"]);
		return $user;
	}

	private const hashAlgorithm = "ripemd160";
}
