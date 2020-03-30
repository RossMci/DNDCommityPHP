<?php
//    require_once('util/secure_conn.php');  // require a secure connection
       require_once('../util/valid_admin.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DNDcommunity</title>
<!--        <link rel="stylesheet" type="text/css" href="main.css"/>-->
    </head>
    <body>
        <header>
            <h1>DNDcommunity</h1>
        </header>
        <main>
            <h1>Login</h1>

            <form action="../Login/index.php" method="post">
                <input type="hidden" name="action" value="add_admin">

                <label>Email:</label>
                <input type="text" class="text" name="user_name">
                <br>
				
				
                <label>Password:</label>
                <input type="password" class="text" name="verificationCode">
                <br>

                <label>Password:</label>
                <input type="password" class="text" name="password">
                <br>
                <label>First Name:</label>
                <input type="test" class="text" name="firstname">
                <br>
                 <label>Last Name:</label>
                <input type="test" class="text" name="lastname">
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Add">
            </form>

            
            
            <br><br>
           
        </main>
    </body>
</html>
