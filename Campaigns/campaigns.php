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
        <meta charset="utf-8" >
        <title>Browse campaigns</title>
        <link href="../dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/dnd.js"></script>

    </head>

    <body>
        <div class="container3" >
            <div id="main">
                <div>
                    <header>

                        <div id="header-contents">

                            <div id="menu">
                                <div id="mySidenav" class="sidenav">
                                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                  <a href= "../member/member-account-detials.php"><i class="fa fa-user-circle"  id="usericon" style="font-size:24px"></i></a>
                                    <a href="../Character/characterSheetCreation.php">Character sheets</a>
                                    <a href="campaigns.php">Campaigns</a>
                                    <a href="../member/joined-campaigns.php"> Joined Campaigns</a>
                                    <a href="../Events/events.php"> Club Events</a>
                                    <a href="../Host/Add-campaigns.php">Add campaign </a>
                                    <a href="../Host/host-current-campaigns.php">current-campaign</a>
                                </div>
                            </div>
                            <div id="menu-contents">
                                <span id="menu"  onclick="openNav()">&#9776; </span>
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
                                    <input  type="text" placeholder="Search..">
                                </div>

                            </div>
                        </div>
                    </header>
                </div>
                <div id="Hosted-Campaigns">
                    <div id="Hosted-Campaigns-header" >
                        <h1>Browse Our Campaigns</h1>
                        <input type="text" id="myInput" onkeyup="filterCam()" placeholder="Search for Campaigns..">
                    </div>
                    <div id="filter-list">
                        <ul id="Campaignslist" >


                            <li>
                                <p class="date">05/10/2019</p>
                                <img src="../images/Hoardofthedragonqueen.jpg"   id="cam-img" >
                                <div class="text-contentsCam">  
                                    <h3>AdvancededDND</h3>
                                    <p>playersNo:3</p>
                                    <p>scenario: hoard of the dragon Queen</p>
                                    <p>CampaignNo:1</p>
                                </div>
                                <div  class="btn-camContainer">
                                    <button class="btn"  onclick="window.location.href = 'campaign-textdetials.php';" type="button"><span>View Details</span></button>
                                    <button class="btn"  onclick="window.location.href = '#';" type="button" ><span>JOIN</span></button>
                                </div>
                            </li>
                            
                                   <li>
                                <p class="date">05/10/2019</p>
                                <img src="../images/Hoardofthedragonqueen.jpg"   id="cam-img" >
                                <div class="text-contentsCam">  
                                    <h3>BOI</h3>
                                    <p>playersNo:3</p>
                                    <p>scenario: hoard of the dragon Queen</p>
                                    <p>CampaignNo:1</p>
                                </div>
                                <div  class="btn-camContainer">
                                    <button class="btn"  onclick="window.location.href = 'campaign-textdetials.php';" type="button"><span>View Details</span></button>
                                    <button class="btn"  onclick="window.location.href = '#';" type="button" ><span>JOIN</span></button>
                                </div>
                            </li>


                        </ul>
                    </div>  

                </div>

            </div> 
        </div>

        <script src="../js/dnd.js"></script>
    </body>

</html>	