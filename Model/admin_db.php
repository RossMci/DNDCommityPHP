<?php
function add_admin($user_name, $password,$firstname, $lastname,$verificationCode) {
    global $db;
    $hash = password_hash($password, PASSWORD_DEFAULT);
	$hashCode= password_hash($verificationCode,PASSWORD_DEFAULT);
    $query = 'INSERT INTO dndAdmin (user_name, password,verificationCode,firstName, lastName)
              VALUES (:user_name, :password,:verificationCode, :firstName, :lastName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
	 $statement->bindValue(':verificationCode',$hashCode);
    $statement->bindValue(':password', $hash);
     $statement->bindValue(':firstName', $firstname);
      $statement->bindValue(':lastName', $lastname);
    $statement->execute();
    $statement->closeCursor();
}

function is_valid_admin_login($user_name, $password,$verificationCode) {
    global $db;
    $query = 'SELECT password FROM dndAdmin
              WHERE user_name= :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    $hash = $row['password'];
	$hashCode=$row['verificationCode'];
    return password_verify($password, $hash)&&password_verify($verificationCode, $hashCode);
}
?>
