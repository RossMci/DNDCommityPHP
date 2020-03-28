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
        <title>MEMBER DETAILS</title>
        <link href="../dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/dnd.js"></script>
    </head>

    <body>
        <div class="container">
            <div id="main">
                <header>

                    <div id="header-contents">

                        <div id="menu">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="member-account-detials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                                <a href="../Character/characterSheetCreation.php">Character sheets</a>
                                <a href="../Campaigns/campaigns.php">Campaigns</a>
                                <a href="joined-campaigns.php"> Joined Campaigns</a>
                                <a href="../Events/events.php"> Club Events</a>
                                <a href="../Host/Add-campaigns.php">Add campaign </a>
                                <a href="../Host/host-current-campaigns.php">current-campaign</a>

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

                            <!--                        <div id="register-login">
                                                        <a href="createMember.html" id="Register1">Sign up</a>
                                                        <a href="Login.html" id="Register2">Login</a>
                                                    </div>-->
                        </div>
                    </div>
                </header>
                <div class="account">
                    <form class="form2" name="email_form" action="index.php" method="post">
                        <h2> account details </h2>
                        <i class="fa fa-user-circle" id="usericon-details"></i>

                        <div id="inputMargin">
                            <input type="hidden" name="action" value="update_member" />
                            <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
<!--                            <input type="hidden" name="member_id" value="1">-->
                            <input type="text" id="first_name" name="Fname" value="<?php echo  $member['Fname'];     ?>">
                            <span id="first_name_error"></span><br>
                            <input type="text" id="Last_name" name="Lname" value="<?php echo  $member['Lname'];     ?>">
                            <span id="Last_name_error"></span><br>
                            <input type="text" id="user_name" name="userName" value="<?php echo  $member['userName'];     ?> ">
                            <span id="user_name_error"></span><br>

                            <input type="text" id="phone_number" name="PhoneNumber" value="<?php echo  $member['PhoneNumber'];     ?> ">
                            <span id="phone_number_error"></span><br>
                            <input type="text" id="email1" name="memberEmail" value="<?php echo  $member['memberEmail'];     ?>">
                            <span id="email2_error"></span><br>

                            <input type="text" id="password1" name="memberPassword" value="<?php echo  $member['memberPassword'];     ?>">
                            <span id="password1_error"></span><br>
                            <div>
                                <input type="text" class="hostaccess" name="hostAccess"  value="<?php echo  $member['hostAccess'];     ?>">
                                <label for="hostaccess" class="hostaccess"> Host access</label><br>
                            </div>
                        </div>
                        <div id="sameLine">
                            <div class="button-container">
                                <form action="." method="post"
                                      id="update_member_form">
                                    <input type="hidden" name="action"
                                           value="edit_member">
                                    <input type="hidden" name="member_id"
                                           value="1">

                                    <input type="submit" value="Update">
                                </form>                        </div>
                            <div class="button-container">
                                <button onclick="window.location.href = 'index.html';" type="button" class="cancelbtn-account "><span>Cancel</span></button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

            <footer class="footer">
            </footer>
        </div>
    </body></html>	