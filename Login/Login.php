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
    <title>DND COMMUNITY-LOGIN</title>
    <link href="../dndstyle.css" rel="stylesheet" type="text/css">
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
<!--                            <a href="member/member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>-->
                            <a href="Login/mangment-login.php">Admin</a>
                            <a href="member/index.php">Sign up</a>
                            <a href="Login/Login.php">Login</a>
                            <a href="Events/events.php"> Club Events</a>
                            <a href="Campaigns/campaigns.php"> Campaigns</a>
<!--                            <a href="member/joined-campaigns.php"> Joined Campaigns</a>-->
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
                            <a href="member/createMember.php" id="Register1">Sign up</a>
                            <a href="Login/Login.php" id="Register2">Login</a>
                        </div>
                    </div>
                </div>
            </header>
    <div class="container Login-bg">
        <div id="main">
            <h2 id="signup">MEMBER LOGIN</h2>
            <form class="form" name="email_form" action="thanks.html" method="get">
                <p><label for="user_name">User name</label></p>
                <input type="text" id="user_name" name="user_name" placeholder="Enter User Name">
                <span id="user_name_error"></span><br>

                <p><label for="password1">password</label></p>
                <input type="password" id="password1" name="password1" placeholder="Enter Password">
                <span id="password1_error"></span><br>

                <div class="same-line">
                    <div class="button-container">
<!--                        <button type="submit" name="submit" id="submit" value="submit"><span>Login</span></button>-->
                          <button onclick="window.location.href ='../member/member-account-detials.php';" type="button" class="cancelbtn "><span>Login</span></button>
                    </div>
                    <div class="button-container">
                        <button onclick="window.location.href ='../index.php';" type="button" class="cancelbtn "><span>Cancel</span></button>
                    </div>
                </div>
            </form>

        </div>

        
  
        <footer class="footer">
        </footer>
    </div>
    <script src="js/dnd.js"></script>

    </div>
</body></html>	