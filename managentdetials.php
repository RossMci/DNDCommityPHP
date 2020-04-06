<?php
require_once ('Model/UserSessionManagement.php');
require_once ('Model/UserAccessLevel.php');

require_once ('phpsrc/WebsitePages.php');

UserSessionManagement::HandleAdminUserAccess();
?>
<!DOCTYPE HTML>
<html lang=en>

    <head>
        <meta charset="utf-8">
        <title>management DETAILS</title>
		<link href="<?php echo WebsitePages::dndStyle; ?>" rel="stylesheet" type="text/css">  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="<?php echo WebsitePages::javaScript; ?>"></script>
        <script src="jquery-ui-1.12.1.custom"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <main>
            <div class="container3">
                <div id="main">
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
                    <div id="management">
                        <div id="mangement-account-details">
                            <form class="form2" name="email_form" action="<?php echo WebsitePages::adminIndex; ?>" method="get">
                                <h2> admin details </h2>
                                <i class="fa fa-user-circle" id="usericon-details"></i>

                                <div id="inputMargin">
                                    <input type="text" id="first_name" name="first_name" value="Ross" placeholder=" Enter First Name">
                                    <span id="first_name_error"></span><br>
                                    <input type="text" id="Last_name" name="Last_name" value="Mcinerney" placeholder=" Enter Last Name">
                                    <span id="Last_name_error"></span><br>
                                    <input type="text" id="user_name" name="user_name" value="DndMan " placeholder=" Enter User Name">
                                    <span id="user_name_error"></span><br>

                                    <input type="text" id="phone_number" name="phone_number" value="0876023456" placeholder="Enter Phone Number">
                                    <span id="phone_number_error"></span><br>
                                    <input type="text" id="email1" name="email1" value="Ross@gmail.com" placeholder=" Enter Email">
                                    <span id="email2_error"></span><br>
                                </div>
                                <input type="text" id="password1" value="dublinee22" name="password1" placeholder=" Enter Password">
                                <span id="password1_error"></span><br>
                                <div id="sameLine">
                                    <div class="button-container">
                                        <button class="buttons-hover" type="submit" name="submit" id="submit" value="submit"><span>Edit</span></button>
                                    </div>
                                    <div class="button-container">
                                        <button onclick="window.location.href = 'index.php';" type="button" class="cancelbtn-account "><span>Cancel</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="admin-tables">
                            <div class="admin-header-table">
                                <h1>Members</h1>
                            </div>
                            <table>
                                <tr>
                                    <th>member ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>User name</th>
                                    <th>Phone number</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <th> host access</th>
                                    <th>view account</th>
                                    <th> delete account</th>
                                </tr>

								<?php foreach ($users as $user) : ?>
									<tr>
										<td><?php echo $user->getID(); ?></td>
										<td><?php echo $user->getFirstname(); ?></td>
										<td><?php echo $user->getLastname(); ?></td>
										<td><?php echo $user->getuserName(); ?></td>
										<td><?php echo $user->getPhoneNumber(); ?></td>
										<td><?php echo $user->getEmail(); ?></td>
										<td>********</td>
										<td><?php echo UserAccessLevel::getLabelFromUser($user); ?></td>
										<td> <form><input type="submit" value="view"></form></td>
										<td><form action="<?php echo WebsitePages::adminIndex; ?>" method="post"
												  id="delete_member_form">
												<input type="hidden" name="action"
													   value="delete_member">
												<input type="hidden" name="member_id"
													   value="<?php echo $user->getId(); ?>">

												<input type="submit" value="Delete">
											</form></td>
									</tr>
								<?php endforeach; ?>
                            </table>
                        </div>

                    </div>
                </div>

                <footer class="footer">
                </footer>
            </div>
        </main>
    </body>
</html>

