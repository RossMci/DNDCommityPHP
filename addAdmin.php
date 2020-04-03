<?php
require_once ("phpsrc/WebsitePages.php");
require_once ('Model/AdminSessionManagement.php');
AdminSessionManagement::HandleAdminAccess();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo WebsiteDetails::Title; ?></title>
        <link href="dndstyle.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1><?php echo WebsiteDetails::Title; ?></h1>
        </header>
        <main>
            <h1>add admin</h1>

            <form action="<?php echo WebsitePages::LoginIndex; ?>" method="post">
                <input type="hidden" name="action" value="add_admin">

                <label>User Name:</label>
                <input type="text" class="text" name="user_name">
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
            <br /><br> /
        </main>
    </body>
</html>