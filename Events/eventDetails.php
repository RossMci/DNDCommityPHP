<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once('../util/valid_admin.php');
?>
<!DOCTYPE HTML>
<html lang= en>
<head>
    <meta charset="utf-8">
    <title>DND COMMUNITY-LOGIN</title>
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
                    <a href="member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                            <a href="../Character/characterSheetCreation.php">Character sheets</a>
                            <a href="../Campaigns/campaigns.php">Campaigns</a>
                            <a href="../member/joined-campaigns.php"> Joined Campaigns</a>
                            <a href="events.php"> Club Events</a>
                            <a href="../Host/Add-campaigns.php">Add campaign </a>
                            <a href="../Host/host-current-campaigns.php">current-campaign</a>
                </div>
            </div>
            <div id="menu-contents">
                <span id="menu" onclick="openNav()">&#9776; </span>
            </div>

            <div id="logo">
                <a href="index.html">
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
<!--                
                <div id="imageupload">
                    <form id="upload-form" action="/action_page.php">
                        <H3> Drag and Drop Image</H3>
                        <p>or</p>
                        <input type="file" name="pic" accept="image/*">
                        <input type="submit">
                    </form>
                </div>-->

<img src="../images/Hoardofthedragonqueen.jpg" alt="campaign image">

                    <hr>
                                <div class="form-contentcamd">
                    <form id="event-edit">
                        <div class="row8">
                            <div class="col-25">
                                <label>Title:</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter event location">
                            </div>
                        </div>

                        <div class="row8">
                            <div class="col-25">
                                <label>Description:</label>
                            </div>
                            <div class="col-75">
                                <textarea rows="4" cols="50">


                              </textarea>
                            </div>
                        </div>

                        <div class="row8">
                            <div class="col-25">
                                <label>Venue:</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter event location">
                            </div>
                        </div>

                        <div class="row8">
                            <div class="col-25">
                                <label>Date:</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter event location">
                            </div>
                        </div>
                        <div class="row8">
                            <div class="col-25">
                                <label>Time:</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter event location">
                            </div>
                        </div>

                        <div class="row8">
                            <div class="col-25">
                                <label>Location:</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Enter event location">
                            </div>
                        </div>
                        <div id="add-event">
                            <button class="btn2" onclick="window.location.href ='index.html';" type="submit" value="Join">submit</button>
                            <button class="btn2" onclick="window.location.href ='index.html';" type="submit" value="Join">cancel</button>
                        </div>
                    </form>
                </div>

                </div>

            </div>

            <footer class="footer">
            </footer>
        </div>
</body></html>	