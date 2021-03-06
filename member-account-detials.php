<?php
require_once ('Model/User.php');
require_once ('Model/UserSessionManagement.php');
require_once ('phpsrc/WebsitePages.php');
UserSessionManagement::LogoutCurrentUser();
?>

<!DOCTYPE HTML>
<html lang= en>
    <head>
        <meta charset="utf-8">
        <title>MEMBER DETAILS</title>
        <link href="dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/dnd.js"></script>
    </head>

    <body>
        <div class="container">
            <div id="main">
                <header>

                    <div id="header-contents">

                        <div id="menu">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="<?php echo WebsitePages::memberAccount; ?>"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
								<a href="<?php echo WebsitePages::adminLogin; ?>">Admin</a>
								<a href="<?php echo WebsitePages::memberSignUp; ?>">Sign up</a>
								<a href="<?php echo WebsitePages::memberLogin; ?>">Login</a>
								<a href="<?php echo WebsitePages::eventIndex; ?>?action=DisplayEvent"> Club Events</a>
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
                                <a href="<?php echo WebsitePages::memberSignUp; ?>" id="Register1">Sign up</a>
<!--                                <a href="<?php echo WebsitePages::memberLogin; ?>?action=logout" id="Register2">Login out </a>-->
                            </div>
                        </div>
                    </div>
                </header>
                <div class="account">
                    <form class="form2" name="email_form" action="<?php echo WebsitePages::memberIndex; ?>" method="post">
                        <h2> account details </h2>
                        <i class="fa fa-user-circle" id="usericon-details"></i>

                        <div id="inputMargin">
                            <input type="hidden" name="action" value="update_member" />
                            <input type="hidden" name="member_id" value="<?php echo $userID; ?>">
<!--                            <input type="hidden" name="member_id" value="1">-->
                            <input type="text" id="first_name" name="firstname" value="<?php echo $user->getFirstname(); ?>">
                            <span id="first_name_error"></span><br>
                            <input type="text" id="Last_name" name="lastname" value="<?php echo $user->getLastname(); ?>">
                            <span id="Last_name_error"></span><br>
                            <input type="text" id="user_name" name="Username" value="<?php echo $user->getUsername(); ?> ">
                            <span id="user_name_error"></span><br>

                            <input type="text" id="phone_number" name="PhoneNumber" value="<?php echo $user->getPhoneNumber(); ?> ">
                            <span id="phone_number_error"></span><br>
                            <input type="text" id="email1" name="email" value="<?php echo $user->getEmail(); ?>">
                            <span id="email2_error"></span><br>

                            <input type="text" id="password1" name="Password" value="<?php echo $user->Password(); ?>">
                            <span id="password1_error"></span><br>
                            <div>
             
                            </div>
                        </div>
                        <div id="sameLine">
                            <div class="button-container">
                                <form action="." method="post"
                                      id="update_member_form">
                                    <input type="hidden" name="action"
                                           value="edit_member">
                                    <input type="hidden" name="member_id"
                                           value="1">

                                    <input type="submit" value="save">
                                </form>                        </div>
                            <div class="button-container">
                                <button onclick="window.location.href = '<?php echo WebsitePages::memberhome; ?>';" type="button" class="cancelbtn-account "><span>Cancel</span></button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

            <footer class="footer">
            </footer>
        </div>
    </body></html>	