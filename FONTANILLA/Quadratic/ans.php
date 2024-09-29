
<?php session_start(); // Start the session to access session variables ?>

<?php
    // Check if the 'answer' session variable is set
    if(isset($_SESSION['answer'])) {
        //display the answer in a bold header
        echo "<h1><b>" . $_SESSION['answer'] . "</b></h1>";
    }
?>