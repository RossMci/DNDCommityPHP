<?php
if (isset($event_id)) {
	$heading_text = 'Edit Event';
	$image_Link = ' Upload a different image';
} else {
	$heading_text = 'Add Event';
	$image_Link = 'Upload an image';
}

//require_once('../util/valid_admin.php');
?>

<!DOCTYPE HTML>
<html lang=en>

    <head>
        <meta charset="utf-8">
        <title>Add event</title>
        <link href="../dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/dnd.js"></script>

    </head>

    <body>
        <header>

            <div id="header-contents">

                <div id="menu">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="../admin/managentdetials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
						<!--                        <a href="campaign-admin.php">campaign details</a>
												<a href="../Campaigns/campaigns.php"> campaigns</a>-->
                        <a href="../Admin/index.php?action=viewEvents">current events</a>
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
                </div>
            </div>
        </header>
        <div class="container3">
            <div id="main">
                <div id="campaign-detialsPage">
                    <hr>
                    <div class="form-contentcamd">
                        <form id="event-edit" action="index.php" method="post" enctype="multipart/form-data">
							<?php if (isset($event_id)) : ?>
								<input type="hidden" name="action" value="update_event" />
								<input type="hidden" name="event_id" value="<?php echo $event_id; ?>" />
							<?php else: ?>
								<input type="hidden" name="action" value="createEvent" />
							<?php endif; ?>   
                            <h3><?php echo $heading_text; ?></h3>
                            <div class="row8">
                                <div class="col-25">
                                    <label><?php echo $image_Link; ?></label>
                                </div>   
                                <div id="imageupload upload-form" class="col-75">

                                    <input type="file" name="imageLink">
                                    <p><?php echo $event['imageLink']; ?></p>

                                </div>
                            </div>
                            <div class="row8">
                                <div class="col-25">
                                    <label>Title:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text"  name="Title" placeholder="Enter event location" value="<?php echo $event['Title']; ?>">
                                </div>
                            </div>

                            <div class="row8">
                                <div class="col-25">
                                    <label>Description:</label>
                                </div>
                                <div class="col-75">
                                    <textarea name="Description" rows="4" cols="50" ><?php echo $event['Description']; ?> </textarea>
                                </div>
                            </div>

                            <div class="row8">
                                <div class="col-25">
                                    <label>Venue:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Venue" placeholder="Enter event location"  value="<?php echo $event['Venue']; ?>">
                                </div>
                            </div>

                            <div class="row8">
                                <div class="col-25">
                                    <label>Date:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Date" placeholder="Enter event location"  value="<?php echo $event['Date']; ?>">
                                </div>
                            </div>
                            <div class="row8">
                                <div class="col-25">
                                    <label>Time:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Time" placeholder="Enter event location"  value="<?php echo $event['Time']; ?>">
                                </div>
                            </div>

                            <div class="row8">
                                <div class="col-25">
                                    <label>Location:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="Location" placeholder="Enter event location" value="<?php echo $event['Location']; ?>">
                                </div>
                            </div>
                            <div id="add-event">
                                <input class="btn2"  type="submit" value="Save">
                                <button class="btn2" onclick="window.location.href = 'index.html';" type="submit" value="Join">cancel</button>
                            </div>

                        </form>
                        <form id="event-edit" action="../Admin/index.php" method="post">
                            <input type="hidden" name="action" value="viewEvents" />
                            <button class="btn2" type="submit">View</button>
                        </form>
                    </div>

                </div>

            </div>

            <footer class="footer">
            </footer>
        </div>
    </body></html>
