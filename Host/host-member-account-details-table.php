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
           <title>management DETAILS</title>
		<link href="../dndstyle.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/dnd.js"></script>
      <script src="jquery-ui-1.12.1.custom"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div class="container3">
<div id="main" >
<header>
    
<div id="header-contents">
    
<div id="menu">
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a
                            <a href="member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                            <a href="../Character/characterSheetCreation.php">Character sheets</a>
                            <a href="../Campaigns/campaigns.php">Campaigns</a>
                            <a href="../member/joined-campaigns.php"> Joined Campaigns</a>
                            <a href="../Events/events.php"> Club Events</a>
                            <a href="Add-campaigns.php">Add campaign </a>
                            <a href="host-current-campaigns.php">current-campaign</a>
</div>
</div>
    <div id="menu-contents">
    <span id="menu"  onclick="openNav()">&#9776; </span>
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
   <input  type="text" placeholder="Search..">
    </div>
    
<!--    <div id="register-login">
    <a href="createMember.html" id="Register1">Sign up</a>
        <a href="Login.html" id="Register2">Login</a>
    </div>-->
</div>
</div>
</header>      
<div id="management">

    <div id="admin-tables">
        <div class="admin-header-table">
            <h1> campaign Members</h1>
        </div>
        <table>
            <tr>
                <th>User Name</th>
                <th>joined Date</th>
                <th> joined Time</th>
                <th>e-Mail</th>
                <th> Remove member</th>
            </tr>
            
            <tr>
                <td>Bob Ross</td>
                <td>22/07/2019</td>
                <td>10:00</td>
                <td>bob@gmail.com</td>
                <td> <button  onclick="window.location.href ='#';" type="button"><span> remove account</span></button></td>
            </tr>

            
            
            
        </table>
    </div>

</div>
    
        
    
    
</div>
    
              <footer class="footer">
  </footer>
   </div>
</body>

</html>	