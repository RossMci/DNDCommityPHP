<?php
// Start session management and include necessary functions
session_start();
require_once('../Model/database.php');
require_once('../Model/admin_db.php');

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_admin_menu';
    }
}

// If the user isn't logged in, force the user to login
if (!isset($_SESSION['is_valid_admin'])) {
    $action = 'login';
}

// Perform the specified action
switch($action) {
    case 'login':
        $user_name = filter_input(INPUT_POST, 'user_name');
        $password = filter_input(INPUT_POST, 'password');
		$VerificationCode= filter_input(INPUT_Post, 'VerificationCode');
        if (is_valid_admin_login($user_name, $passwordm,$VerificationCode)) {
            $_SESSION['is_valid_admin'] = true;
            include('../Admin/adminMenu.php');
        } else {
            $login_message = 'You must login to view this page.';
            include('../Login/mangment-login.php');
            
            
        }
        
    
          break;
          
          
    case 'show_admin_menu':
        include('../Admin/AdminMenu.php');
        break;
   case 'admin_registration' :
          include('../Admin/addAdmin.php');
        break;
      case 'add_admin':
        $user_name = filter_input(INPUT_POST, 'user_name');
        $password = filter_input(INPUT_POST, 'password');
		$VerificationCode=filter_input(INPUT_POST,'VerificationCode');
         $firstname = filter_input(INPUT_POST, 'firstname');
          $lastname = filter_input(INPUT_POST, 'lastname');
         add_admin($user_name, $password, $firstname, $lastname,$VerificationCode);
          include('../Admin/adminMenu.php');  
          break;
    case 'logout':
        $_SESSION = array();   // Clear all session data from memory
        session_destroy();     // Clean up the session ID
        $login_message = 'You have been logged out.';
        include('../mangment-login.php');
        break;
}
?>