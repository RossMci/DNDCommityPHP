<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE HTML>
<html lang= en>
    <head>
        <meta charset="utf-8">
        <title>Current Event Details</title>
        <link href="../dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/dnd.js"></script>
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
                                <a href="campaign-admin.php">campaign details</a>
                                <a href="../Campaigns/campaigns.php"> campaigns</a>
                                <a href="current-events.php">current events</a>
                                <a href="../Events/addEvent.php">Add event</a>
                                <a href="../Events/events.php">Events</a>
                            </div>
                        </div>
                        <div id="menu-contents">
                            <span id="menu" onclick="openNav()">&#9776; </span>
                        </div>

                        <div id="logo">
                            <a href="../index.php">
                                <img src="../images/dndlogo3.png" alt="dndlogo">
                            </a>
                            <h3>COMMUNITY </h3>
                        </div>

                        <div id="member-login">
                            <div id="searchbar">
                                <i class="fa fa-search" id="search" style="font-size:24px"></i>
                                <input type="text" placeholder="Search..">
                            </div>

                            <div id="register-login">
                                <a href="createMember.html" id="Register1">Sign up</a>
                                <a href="Login.html" id="Register2">Login</a>
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

                                    <td><form action="../Events/index.php" method="post"
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

                        <button onclick="window.location.href = '../Events/index.php';" type="button"><span> Add a Event</span></button>
                    </div>

                </div>





            </div>

            <footer class="footer">
                <p>create,play,Exployer the world of dungeons and dragons </p>
            </footer>
        </div>
    </body></html>	