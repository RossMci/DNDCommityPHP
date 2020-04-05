<?php
require_once ('phpsrc/WebsitePages.php');
?>
<!DOCTYPE HTML>
<html lang= en>
    <head>
        <meta charset="utf-8" >
        <title>MEMBER SIGN UP</title>
        <link href="dndstyle.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="container img-bg " >
            <div id="main">
                <div class="form-postion">
                    <h2 id="signup">MEMBER SIGN UP</h2>
                    <form class="form" action="<?php echo WebsitePages::memberIndex; ?>" method="post">

                        <input type="hidden" name="action" value="create_member" />

                        <p><label for="first_name">First Name:</label></p>
                        <input type="text" id="first_name" name="Fname" placeholder=" Enter First Name">
                        <span id="first_name_error"></span><br>

                        <p> <label for="Last_name">Last Name:</label></p>
                        <input type="text" id="Last_name" name="Lname" placeholder=" EnterLast Name">
                        <span id="Last_name_error"></span><br>

                        <p><label for="user_name">User name:</label></p>
                        <input type="text" id="user_name" name="userName" placeholder=" Enter User Name">
                        <span id="user_name_error"></span><br>

                        <p><label for="phone_number">Phone Number:</label></p>
                        <input type="text" id="phone_number" name="PhoneNumber" placeholder="Enter Phone Number">
                        <span id="phone_number_error"></span><br>

                        <p><label for="email1">Email:</label></p>
                        <input type="text" id="email1" name="memberEmail" placeholder=" Enter Email">
                        <span id="email2_error"></span><br>

                        <p><label for="email2">confirm  Email:</label></p>
                        <input type="text" id="email2" name="email2" placeholder="Confirm Email">
                        <span id="email2_error"></span><br>

                        <p><label for="password1">password:</label></p>
                        <input type="password" id="password1" name="memberPassword" placeholder=" Enter Password">
                        <span id="password1_error"></span><br> 
                        <p><label for="password2"> confirm password:</label></p>
                        <input type="password" id="password2" name="password2" placeholder="Confirm password">
                        <span id="password2_error"></span><br>

<!--						<p><label for="hostaccess2"> host access</label></p>
						<input type="checkbox" id="hostaccess2" name="hostAccess">-->


                        <div class="same-line">
                            <div class="button-container">
           <!--            <button   type="submit" id="submit" value=" Create Member"><span>CREATE</span></button>   -->
                                <input type="submit" value="Create Member">
                            </div>     
                            <div class="button-container">
                                <button onclick="window.location.href = '<?php echo WebsitePages::homeIndex; ?>';" type="button" class="cancelbtn "><span>CANCEL</span></button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>

        </div> 


        <script src="../js/dnd.js"></script>
    </body>

</html>	
