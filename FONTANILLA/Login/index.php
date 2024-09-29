<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 2</title>
    
    <!-- Start the session to allow using session variables throughout the page -->
    <?php session_start(); ?>

</head>
<body>

    <!-- Login Form, it sends data to handleForm.php via POST method -->
    <form action="handleForm.php" method="POST">
        <!-- Input field for Username -->
        <p>Username: <input type="text" name="Username" required></p> <!-- putting "required" will make it to where you need to fillout -->
        <!-- Input field for Password -->
        <p>Password: <input type="password" name="Password" required></p>
        <!-- Submit button to trigger login -->
        <p><input type="submit" value="Login" name="LoginBtn"></p>
    </form>

    <!-- Logout functionality, it sends data to unset.php via POST method -->
    <form action="unset.php" method="POST">
        <p><input type="submit" value="Logout" name="LogoutBtn"></p>
    </form>

    <!-- Section for displaying messages based on session status -->
    <h2>
        <?php
        // Check if there is an error (current user/same user) stored in the session
        if (isset($_SESSION['error'])) {
            // Display that the user is logged in already
            echo $_SESSION['error'] . " is already logged in. Wait for them to log out first.";
        } 
        // Check if a user is logged in and display their username
        elseif (isset($_SESSION['Username'])) {
            echo "User logged in: " . $_SESSION['Username'];
        }
        ?>
    </h2>
    
    <h2>
        <?php
         // Check if a password is logged in and display their password (hashed)
        if (isset($_SESSION['password'])) {
            echo "User password: ";
            echo $_SESSION['password'];
        }
        ?>
    </h2>

</body>
</html>
