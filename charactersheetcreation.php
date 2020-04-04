<?php
require_once ('phpsrc/WebsitePages.php');
?>

<!DOCTYPE HTML>
<html lang= en>
	<head>
		<meta charset="utf-8">
		<title>Character sheet creation</title>
		 <link href="<?php echo WebsitePages::dndStyle; ?>" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="<?php echo WebsitePages::javaScript; ?>"></script>

	</head>

	<body>
		<div>
			<header>

				<div id="header-contents">

					<div id="menu">
						<div id="mySidenav" class="sidenav">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="<?php echo WebsitePages::managentdetialsIndex; ?>"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                                <a href="<?php echo WebsitePages::adminIndex; ?>?action=viewEvents">current events</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=createEvent">Add event</a>
                                <a href="<?php echo WebsitePages::eventIndex; ?>?action=DisplayEvent">Events</a>
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

					</div>
					
					
                            <div id="register-login">
                                <a href="<?php echo WebsitePages::memberIndex; ?>?action=createMember" id="Register1">Sign up</a>
                                <a href="<?php echo WebsitePages::loginIndex; ?>?action=logout" id="Register2">Login out </a>
                            </div>
				</div>
			</header>
		</div>
		<div class="container3">
			<div id="main2">
				<div id="charaterSheet">
					<h1>Download character sheet</h1>
                    <form id="charactersheet-form" action="<?php echo WebsitePages::CharacterIndex; ?>">
                        <H3> Download and upload character sheets</H3>
                        <p>or</p>
                        <input type="file" name="file" accept="*">
                        <input type="submit" value=" SubmitCharactersheet">
                        <a href="character%2520sheet/5E%20charactersheet.pdf" download>
                            <input type="button" name="download file" value="Download">
                        </a>
                    </form>
                </div>

            </div>

			<footer class="footer">
			</footer>
		</div>
	</body></html>	
