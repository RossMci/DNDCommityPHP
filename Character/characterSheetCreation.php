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
    <title>Character sheet creation</title>
    <link href="../dndstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <script src="../js/dnd.js"></script>

</head>

<body>
    <div>
        <header>

            <div id="header-contents">

                <div id="menu">
                    <div id="mySidenav" class="sidenav">
                         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                             <a href="../member/member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
<!--                            <a href="../Campaigns/campaigns.php">Campaigns</a>
                            <a href="../member/joined-campaigns.php"> Joined Campaigns</a>-->
                            <a href="../Events/events.php"> Club Events</a>
<!--                            <a href="../Host/Add-campaigns.php">Add campaign </a>
                            <a href="../Host/host-current-campaigns.php">current-campaign</a>-->
                    </div>
                </div>
                <div id="menu-contents">
                    <span id="menu" onclick="openNav()">&#9776; </span>
                </div>

                <div id="logo">
                    <a href="../index.html">
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
    </div>
    <div class="container3">
        <div id="main2">
            <div id="charaterSheet">
                 <h1>Dowload character sheet</h1>
                    <form id="charactersheet-form" action="/action_page.php">
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
