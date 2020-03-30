
<?php 
require_once('../util/valid_admin.php');
?>
<!DOCTYPE HTML>
<html lang=en>

    <head>
        <meta charset="utf-8">
        <title>management DETAILS</title>
            <link href="../dndstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/dnd.js"></script>
        <script src="jquery-ui-1.12.1.custom"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>

    <body>
        <main>
            <div class="container3">
                <div id="main">
                    <header>

                        <div id="header-contents">

                            <div id="menu">
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a href="managentdetials.php"><i class="fa fa-user-circle" id="usericon" style="font-size:24px"></i></a>
                                    <a href="campaign-admin.php">campaign details</a>
                                    <a href="../Campaigns/campaigns.php"> campaigns</a>
                                    <a href="index.php?action=viewEvents">current events</a>
                                    <a href="../Events/index.php">Add event</a>
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

                                <!--                        <div id="register-login">
                                                            <a href="createMember.html" id="Register1">Sign up</a>
                                                            <a href="../Login/Login.php" id="Register2">Login</a>
                                                        </div>-->
                            </div>
                        </div>
                    </header>
                    <div id="management">
                        <div id="mangement-account-details">
                            <form class="form2" name="email_form" action="thanks.html" method="get">
                                <h2> admin details </h2>
                                <i class="fa fa-user-circle" id="usericon-details"></i>

                                <div id="inputMargin">
                                    <input type="text" id="first_name" name="first_name" value="Ross" placeholder=" Enter First Name">
                                    <span id="first_name_error"></span><br>
                                    <input type="text" id="Last_name" name="Last_name" value="Mcinerney" placeholder=" Enter Last Name">
                                    <span id="Last_name_error"></span><br>
                                    <input type="text" id="user_name" name="user_name" value="DndMan " placeholder=" Enter User Name">
                                    <span id="user_name_error"></span><br>

                                    <input type="text" id="phone_number" name="phone_number" value="0876023456" placeholder="Enter Phone Number">
                                    <span id="phone_number_error"></span><br>
                                    <input type="text" id="email1" name="email1" value="Ross@gmail.com" placeholder=" Enter Email">
                                    <span id="email2_error"></span><br>
                                </div>
                                <input type="text" id="password1" value="dublinee22" name="password1" placeholder=" Enter Password">
                                <span id="password1_error"></span><br>
                                <div id="sameLine">
                                    <div class="button-container">
                                        <button class="buttons-hover" type="submit" name="submit" id="submit" value="submit"><span>Edit</span></button>
                                    </div>
                                    <div class="button-container">
                                        <button onclick="window.location.href = 'index.php';" type="button" class="cancelbtn-account "><span>Cancel</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="admin-tables">
                            <div class="admin-header-table">
                                <h1>Members</h1>
                            </div>
                            <table>
                                <tr>
                                    <th>member ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>User name</th>
                                    <th>Phone number</th>
                                    <th>Email</th>
                                    <th>password</th>
                                    <th> host access</th>
                                    <th>view account</th>
                                    <th> delete account</th>
                                </tr>

<?php foreach ($members as $member) : ?>
                                    <tr>
                                        <td><?php echo $member->getmemberID(); ?></td>
                                        <td><?php echo $member->getFname(); ?></td>
                                        <td><?php echo $member->getLname(); ?></td>
                                        <td><?php echo $member->getuserName(); ?></td>
                                        <td><?php echo $member->getPhoneNumber(); ?></td>
                                        <td><?php echo $member->getmemberEmail(); ?></td>
                                        <td><?php echo $member->getmemberPassword(); ?></td>
                                        <td><?php echo $member->gethostAccess(); ?></td>
                                        <td> <form><input type="submit" value="view"></form></td>
                                        <td><form action="." method="post"
                                                  id="delete_member_form">
                                                <input type="hidden" name="action"
                                                       value="delete_member">
                                                <input type="hidden" name="member_id"
                                                       value="<?php echo $member->getmemberID(); ?>">

                                                <input type="submit" value="Delete">
                                            </form></td>
                                    </tr>
<?php endforeach; ?>
                            </table>
                        </div>

                    </div>

<!-- <td> <button onclick="window.location.href ='../member/member-account-detials.php';" type="button"><span> view account</span></button></td>
                            <td> <button onclick="window.location.href ='index.php';" type="button"><span>Delete</span></button></td>-->


                </div>

                <footer class="footer">
                </footer>
            </div>
        </main>
    </body>
</html>

