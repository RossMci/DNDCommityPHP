<?php


class member_db {
    public static function getMembers() {
        $db = Database::getDB();
        $query = 'SELECT * FROM member
                  ORDER BY memberID';
        $statement = $db->prepare($query);
        $statement->execute();
         
         $members = array();
        foreach ($statement as $row) {
            $member = new member($row['memberID'],
                                     $row['Fname'],
                                     $row['Lname'],
                                     $row['userName'],
                                     $row['PhoneNumber'],
                                     $row['memberEmail'],
                                     $row['memberPassword'],
                                     $row['hostAccess']);
                                           
            $members[] = $member;
        }
        return $members;
    }
    
    
     public static function getmember($member_id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM member
                  WHERE memberID = :member_id';
        $statement = $db->prepare($query);
        $statement->bindValue(":member_id", $member_id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
    
        return $row;
    }
    
    
     
        

    
    
 public static function createmember($member) {
        $db = Database::getDB();
        $Fname = $member->getFname();
        $Lname = $member->getLname();
        $userName = $member->getuserName();
        $PhoneNumber = $member->getPhoneNumber();
        $memberEmail = $member->getmemberEmail();
        $memberPassword = $member->getmemberPassword();
        $hostAccess = $member->gethostAccess();
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
        $statement->bindValue(':memberPassword', $memberPassword);
        $statement->bindValue(':hostAccess', $hostAccess);
        $statement->execute();
        $statement->closeCursor();
    }
    
     public static function DeleteMember($member_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM member
                  WHERE memberID = :member_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':member_id', $member_id);
        $statement->execute();
        $statement->closeCursor();

    }
    
    public static function update_member($member_id,$Fname, $Lname, $userName, $PhoneNumber, $memberEmail, $memberPassword, $hostAccess) {
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
    try {
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
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

}
?>