<?php

class MemberRepository
{

	public static function getMembers()
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM member
                  ORDER BY memberID';
		$statement = $db->prepare($query);
		$statement->execute();

		$members = array();
		foreach ($statement as $row)
		{
			$members[] = self::Transform($row);
		}
		return $members;
	}

	protected static function Transform($row): ?member
	{
		return new member($row['Fname'], $row['memberID'], $row['Lname'], $row['memberPassword'], $row['userName'], $row['PhoneNumber'], $row['memberEmail'], $row['hostAccess']);
	}

	public static function getmember($member_id): ?member
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM member
                  WHERE memberID = :member_id';
		$statement = $db->prepare($query);
		$statement->bindValue(":member_id", $member_id);
		$statement->execute();
		$row = $statement->fetch();
		$statement->closeCursor();
		if ($count > 0)
		{
			return AdminRepoidtory::Transform($row);
		}
		else
		{
			return null;
		}
	}

	public static function Verifymember($userName, $memberPassword): ?member
	{
		$db = Database::getDB();
		$query = 'SELECT * FROM member
              WHERE userName= :userName
 And memberPassword = :memberPassword';
		$statement = $db->prepare($query);

		$statement->bindValue(':userName', $userName);
//		$password = password_hash($password, PASSWORD_DEFAULT);
		$hash = hash('ripemd160', $memberPassword);
//			 $hash=$password;
		$statement->bindValue(':memberPassword', $hash);
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

	public static function createmember($member)
	{
		$db = Database::getDB();
		$Fname = $member->getFname();
		$Lname = $member->getLname();
		$userName = $member->getuserName();
		$PhoneNumber = $member->getPhoneNumber();
		$memberEmail = $member->getmemberEmail();
		$memberPassword = $member->getmemberPassword();
		$hostAccess = $member->gethostAccess();

		$hash = hash('ripemd160', $memberPassword);
		$query = 'INSERT INTO member
                     ( Fname, Lname, userName, PhoneNumber, memberEmail, memberPassword, hostAccess)
                  VALUES
                     ( :Fname, :Lname,:userName,:PhoneNumber,:memberEmail,:memberPassword,:hostAccess)';
		$statement = $db->prepare($query);
		$statement->bindValue(':Fname', $Fname);
		$statement->bindValue(':Lname', $Lname);
		$statement->bindValue(':userName', $userName);
		$statement->bindValue(':PhoneNumber', $PhoneNumber);
		$statement->bindValue(':memberEmail', $memberEmail);
		$statement->bindValue(':memberPassword', $hash);
		$statement->bindValue(':hostAccess', $hostAccess);
		$statement->execute();
		$statement->closeCursor();
	}

	function is_valid_member_login($userName, $memberPassword)
	{
		global $db;
		$query = 'SELECT memberID FROM member
              WHERE userName= :userName
 And memberPassword = :memberPassword';

		$statement = $db->prepare($query);
		$statement->bindValue(':user_name', $userName);
//$password = password_hash($password, PASSWORD_DEFAULT);
		$statement->bindValue(':password', $memberPassword);

		$statement->execute();

		$row = $statement->fetch();
		$statement->closeCursor();
		return $row;
//	return password_verify($password, $hash);
	}

	public static function DeleteMember($member_id)
	{
		$db = Database::getDB();
		$query = 'DELETE FROM member
                  WHERE memberID = :member_id';
		$statement = $db->prepare($query);
		$statement->bindValue(':member_id', $member_id);
		$statement->execute();
		$statement->closeCursor();
	}

	public static function update_member($member_id, $Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess)
	{
		$db = Database::getDB();
		$query = 'UPDATE member
              SET  memberID = :member_id,
                  $Fname = :Fname,
                  $Lname = :Lname,
                  $userName = :userName,
                  $PhoneNumber = :PhoneNumber,
                  $memberEmail = :memberEmail,
                  $memberPassword = :memberPassword,
                  $hostAccess = :hostAccess
                 WHERE memberID= :member_id';
		try
		{
			$statement = $db->prepare($query);

			$statement->bindValue(':Fname', $Fname);
			$statement->bindValue(':Lname', $Lname);
			$statement->bindValue(':userName', $userName);
			$statement->bindValue(':PhoneNumber', $PhoneNumber);
			$statement->bindValue(':memberEmail', $memberEmail);
			$statement->bindValue(':memberPassword', $memberPassword);
			$statement->bindValue(':hostAccess', $hostAccess);
			$statement->bindValue(':member_id', $member_id);
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

?>