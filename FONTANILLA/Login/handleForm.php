<?php
session_start(); // Start the session to store and access session variables

// Check if a user is already logged in
if (isset($_SESSION['Username'])) {
    // Get the currently logged-in username from the session
    $currentUsername = $_SESSION['Username'];

    // Check if the posted username matches the currently logged-in user
    if ($_POST['Username'] == $currentUsername) {
        // If the same user is attempting to log in again, set an error message
        $_SESSION['error'] = $currentUsername; 
        // Unset the password session variable to reset the password field
        unset($_SESSION['password']);
    } else {
        // If a different user is attempting to log in, also set an error message
        $_SESSION['error'] = $currentUsername;
        // Unset the current username and password to log out the existing user
        unset($_SESSION['Username']);
        unset($_SESSION['password']);
    }
    
    // Redirect back to index.php with the error message
    header('Location: index.php');
    exit;
}

// Check if the form has been submitted by checking the presence of the Login button
if (isset($_POST['LoginBtn'])) {
    // Get the username and password from the form inputs
    $Username = $_POST['Username'];
    $Password = md5($_POST['Password']); // Hash the password using MD5

    // Set the session variables for the logged-in user
    $_SESSION['Username'] = $Username;
    $_SESSION['password'] = $Password;

    // Redirect back to index.php after successful login
    header('Location: index.php');
    exit;
}
?>