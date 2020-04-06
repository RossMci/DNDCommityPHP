<?php
require_once ("phpsrc/WebsitePages.php");
require_once ('Model/UserSessionManagement.php');
UserSessionManagement::HandleAdminUserAccess();
?>
<!DOCTYPE html>
<html>
    <head>
               <meta charset="utf-8">
          <title>ADD Admin</title>
		<link href="<?php echo WebsitePages::dndStyle; ?>" rel="stylesheet" type="text/css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="<?php echo WebsitePages::javaScript; ?>"></script>
        <script src="jquery-ui-1.12.1.custom"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <header>

                        <div id="header-contents">

                            <div id="menu">
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="<?php echo WebsitePages::managentdetials; ?>"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>                   
                                <a href="<?php echo WebsitePages::adminIndex; ?>?action=viewEvents">current events</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=createEvent">Add event</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=DisplayEvent">Events</a>
							 <a href="<?php echo WebsitePages::loginIndex; ?>?action=show_admin_menu">Admin Menu</a>
                                </div>
                            </div>
                            <div id="menu-contents">
                                <span id="menu" onclick="openNav()">&#9776; </span>
                            </div>

                            <div id="logo">
                                <a href="<?php echo WebsitePages::homeIndex; ?>">
                                <img src="<?php echo WebsitePages::images; ?>dndlogo3.png" alt="dndlogo">
                                </a>
                                <h3>COMMUNITY </h3>
                            </div>

                            <div id="member-login">
                                <div id="searchbar">
                                    <i class="fa fa-search" id="search" style="font-size:24px"></i>
                                    <input type="text" placeholder="Search..">
                                </div>

                                                        <div id="register-login">
                                <a href="<?php echo WebsitePages::memberIndex; ?>?action=createMember" id="Register1">Sign up</a>
                                <a href="<?php echo WebsitePages::loginIndex; ?>?action=logout" id="Register2">Login out </a>
                            </div>
                            </div>
                        </div>
                    </header>
        <main>
            <h1>add admin</h1>

            <form action="<?php echo WebsitePages::loginIndex; ?>" method="post">
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
            <br/><br/> 
        </main>
    </body>
</html>