<?php
session_start(); // Start the session to store and access session variables

// Check if the form has been submitted
if (isset($_POST['submitBtn'])) {
    // Get the numbers from the form input
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = $_POST['C'];

    // Calculate the answer
    $answer = ($B * $B) - (4 * $A * $C);

    // Store the answer in the session
    $_SESSION['answer'] = $answer;

    // Redirect to another page to display the answer
    header('Location: ans.php');
    exit; // Stop further execution
}
?>
