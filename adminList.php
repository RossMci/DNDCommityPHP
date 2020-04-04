<?php
require_once ('Model/AdminSessionManagement.php');
require_once ('phpsrc/WebsitePages.php');
AdminSessionManagement::HandleAdminAccess();
?>

<!DOCTYPE HTML>
<html lang= en>
    <head>
        <meta charset="utf-8">
        <title>Current Event Details</title>
         <link href="<?php echo WebsitePages::dndStyle; ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="<?php echo WebsitePages::javaScript; ?>"></script>
        <script src="jquery-ui-1.12.1.custom"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <div class="container3">
            <div id="main">
                <header>

                    <div id="header-contents">

                        <div id="menu">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="managentdetials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                                <a href="<?php echo WebsitePages::adminIndex; ?>?action=viewEvents">current events</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=add_edit_event_form">Add event</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=DisplayEvent">Events</a>
                            </div>
                        </div>
                        <div id="menu-contents">
                            <span id="menu" onclick="openNav()">&#9776; </span>
                        </div>

                        <div id="logo">
                            <a href="../index.php">
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
                    <div id="admin-tables">
                        <div class="admin-header-table">
                            <h1>Event Details </h1>
                        </div>
                        <table>
                            <tr>
                                <th>EventID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Venue</th>
                                <th> Date</th>
                                <th> Time</th>
                                <th>Location</th>
                                <th>image</th>
								<th>displayed image</th>
                                <th>Update Event</th>
                                <th>Delete Event</th>
                            </tr>
							<?php foreach ($events as $event) : ?>
								<tr>
									<td><?php echo $event->geteventID(); ?></td>
									<td><?php echo $event->getTitle(); ?></td>
									<td><?php echo $event->getDescription(); ?></td>
									<td><?php echo $event->getVenue(); ?></td>
									<td><?php echo $event->getDate(); ?></td>
									<td><?php echo $event->getTime(); ?></td>
									<td><?php echo $event->getLocation(); ?></td>
									<td><?php echo $event->getimageLink(); ?></td>
									<td>
										<?php
										if ($event->getImageData() != null)
										{
											?>
											<img src="data:image/jpeg;base64,<?php echo($event->getImageData()) ?>" height="200" width="200" class="img-thumnail" />
										<?php } ?>
									</td>

									<td><form action="<?php echo WebsitePages::eventIndex; ?>" method="post"
											  id="update_event_form">
											<input type="hidden" name="action"
												   value="add_edit_event_form">
											<input type="hidden" name="event_id"
												   value="<?php echo $event->geteventID(); ?>">

											<input type="submit" value="Update">
										</form></td>
									<td><form action="." method="post"
											  id="delete_event_form">
											<input type="hidden" name="action"
												   value="deleteEvent">
											<input type="hidden" name="event_id"
												   value="<?php echo $event->geteventID(); ?>">

											<input type="submit" value="Delete">
										</form></td>

								</tr>
							<?php endforeach; ?>
                        </table>

                        <button onclick="window.location.href = '<?php echo WebsitePages::eventIndex; ?>';" type="button"><span> Add a Event</span></button>
                    </div>

                </div>





            </div>

            <footer class="footer">
                
            </footer>
        </div>
    </body></html>	