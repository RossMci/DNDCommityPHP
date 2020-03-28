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
        <title>Campaign details</title>
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
                        <a href= "../member/member-account-detials.php"><i class="fa fa-user-circle"  id="usericon" style="font-size:24px"></i></a>
                        <a href="mangment-login.html" >Admin</a>
                        <a href="createMember.html" >Sign up</a>
                        <a href="Login.html">Login</a>
                        <a href="Product.html"> Shop</a> 
                        <a href="events.html"> Club Events</a>
                        <a href="campaigns.html"> Campaigns</a>
                    </div>
                </div>
                <div id="menu-contents">
                    <span id="menu"  onclick="openNav()">&#9776; </span>
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
                        <input  type="text" placeholder="Search..">
                    </div>


                </div>
            </div>
        </header>      
        <div class="container">
            <div id="main">
                <div id="campaign-detialsPage">
                    <img src="../images/Hoardofthedragonqueen.jpg" alt="campaign image"> 
                    <hr>
                    <div id="text-contentcamd">
                        <p><label>Title:</label> Hoard of the dragon Queen </p>    
                        <label>Description:</label>
                        <p>Experinced players needed</p>
                        <p><label>Venue:</label> Treaceys hotel </p>  
                        <p><label>Date:</label> 22/06/2019 </p>  
                        <p><label>Time:</label> 16:00 </p>  
                        <p><label>Location:</label> Ennis,CO.clare,ireland </p>  
                        <p><label>Players:</label> 3 </p>  
                        <p><label>CampaignNo:</label> 1 </p>  
                    </div>
                    <div id="btn-camd">
                        <button  class="btn2"  onclick="window.location.href = 'campaign-admin.php';" type="submit" value="Join">Back</button>
                    </div>
                </div>

            </div>

            <footer class="footer">
            </footer>  
        </div> 
    </body>

</html>	