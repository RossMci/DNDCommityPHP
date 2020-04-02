<?php
//require_once('../util/valid_admin.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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
<!--                                <a href="campaign-admin.php">campaign details</a>-->
<!--                                <a href="../Campaigns/campaigns.php"> campaigns</a>-->
                                <a href="index.php?action=viewEvents">current events</a>
                                <a href="../Events/index.php?action=">Add event</a>
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
                                <a href="../Login/index.php?action=logout" id="Register2">Login out </a>
                            </div>
                        </div>
                    </div>


                </header>

				<a href="index.php?action=viewEvents">current events</a>
				<br>
				<a href="../Events/index.php">Add event</a>
				<br>
				<a href="/Admin/managentdetials.php">member List</a>
				<br>
				<a href="../Login/index.php?action=admin_registration">Add Admin</a>
				<br>
				<a href="../Events/eventDetails.php">current events</a>
				<br>

			</div>
            <footer class="footer">
                <p>create,play,Exployer the world of dungeons and dragons </p>
            </footer>
        </div>
    </body></html>	