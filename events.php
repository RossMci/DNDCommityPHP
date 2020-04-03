<?php 
require_once ('phpsrc/WebsitePages.php');
?>

<!DOCTYPE HTML>
<html lang= en> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>club Events</title>
                <link href="<?php echo WebsitePages::dndStyle; ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <header>

            <div id="header-contents">

                <div id="menu">
                    <div id="mySidenav" class="sidenav">
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
                                <a href="<?php echo WebsitePages::memberIndex; ?>?action=createMember" id="Register1">Sign up</a>
                                <a href="<?php echo WebsitePages::loginIndex; ?>?action=logout" id="Register2">Login out </a>
                            </div>
                </div>
            </div>
        </header>
        <div class="container3">
            <div id="main2">
                <div id="events-contents">
                    <h1>Club events </h1>
                    <hr>
                    <div class="row">
						<?php foreach ($events as $event) : ?>
							<div class="column6">
								<section>
									<?php
									if ($event->getImageData() != null)
									{
										?>
										<img src="data:image/jpeg;base64,<?php echo($event->getImageData()) ?>" height="200" width="200" class="img-thumnail" />
									<?php } ?>
									<h3>Title:</h3>
									<p> <?php echo $event->getTitle(); ?></p>
									<h3>Description:</h3>
									<p><?php echo $event->getDescription(); ?> </p>
									<h3>Venue:</h3>
									<p> <?php echo $event->getVenue(); ?></p>
									<h3>Date:</h3>
									<p> <?php echo $event->getDate(); ?></p>
									<h3>Time:</h3>
									<p> <?php echo $event->getTime(); ?></p>
									<h3>Location:</h3>
									<p> <?php echo $event->getLocation(); ?></p>
									<button onclick="sweet()">Reserve</button>
								</section>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
            </div>


            <footer class="footer">

            </footer>
        </div>

        <script src="<?php echo WebsitePages::javaScript; ?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<script type="text/javascript">
									function sweet() {
										swal.fire("Resevation Complete!", "give your email too the register desk too reduce registeration time!\nOnly works if your logged in as member", "success");
									}

		</script>
    </body></html>	