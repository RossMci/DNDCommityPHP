

<!DOCTYPE HTML>
<html lang= en>
	<head>
		<meta charset="utf-8">
		<title><?php echo WebsiteDetails::Title; ?>: home page</title>
		<link href="dndstyle.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>

	<body
		<div class="container">
		<div id="main">
			<div>
				<header>

					<div id="header-contents">

						<div id="menu">
							<div id="mySidenav" class="sidenav">
								<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<!--                            <a href="member/member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>-->
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
								<a href="Login/Login.php" id="Register2">Login</a>
							</div>
						</div>
					</div>
				</header>
			</div>
			<!--        <div id="main">-->
            <div id="hero">
                <img src="<?php echo WebsitePages::images; ?>mainhero.jpg" id="hero" alt="Host setup">
                <div class="centered">
                    <h2>dungeons and dragons Community Club </h2>
                </div>
            </div>
            <div class=" background-main ">
                <div class="row2">
                    <div class="column2">
                        <img src="<?php echo WebsitePages::images; ?>hero3.jpg" id="pad-img" alt="Host setup">
                        <div class="centered ">
                            <h2>HOST</h2>
                        </div>
                    </div>
                    <div class="column2">
                        <img src="<?php echo WebsitePages::images; ?>hero.jpg" id="pad-img" alt="large dragon">
                        <div class="centered">
                            <h2>Join</h2>
                        </div>
                    </div>
                    <div class="column2">
                        <img src="<?php echo WebsitePages::images; ?>herodragon.jpg" alt="large dragon">
                        <div class="centered">
                            <h2>PLAY</h2>
                        </div>
                    </div>
                </div>

            </div>

            <div id="aboutus">
                <h2> Club Foundation goals </h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

            </div>


            <div class="slideshow-container">
                <h2> Popular Events at our club</h2>
                <div class="row2">
                    <div class="mySlides fade">
                        <img src="<?php echo WebsitePages::images; ?>5e1book.jfif">
                        <img src="<?php echo WebsitePages::images; ?>dndlogo3.png">
                        <img src="<?php echo WebsitePages::images; ?>dndlogo3.png">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo WebsitePages::images; ?>dndlogo3.png">
                        <img src="<?php echo WebsitePages::images; ?>5e1book.jfif">
                        <img src="<?php echo WebsitePages::images; ?>5e1book.jfif">
                    </div>

                    <div class="mySlides fade">
                        <img src="<?php echo WebsitePages::images; ?>dndevent1.jfif">
                        <img src="<?php echo WebsitePages::images; ?>5e1book.jfif">
                        <img src="<?php echo WebsitePages::images; ?>5e1book.jfif">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>


            <div id="events">
                <img src="<?php echo WebsitePages::images; ?>CurseofStrahd.jpg" id="dndevent" alt="large dragon">
                <h2> Upcoming events </h2>
                <h3>Title:</h3>
				<p> text about the event</p>
				<h3>Description:</h3>
				<p> text about the event</p>
				<h3>Venue:</h3>
				<p> text about the event</p>
				<h3>Date:</h3>
				<p> text about the event</p>
				<h3>Time:</h3>
				<p> text about the event</p>
            </div>
        </div>
        <footer class="footer">
        </footer>
    </div>
    <script src="<?php echo WebsitePages::javaScript; ?>"></script>
</body></html> 