<?php
session_start(); // Start the session to store variables

if (isset($_POST['order']) && isset($_POST['quantity']) && isset($_POST['cash'])) {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    // Set the prices for each order
    $prices = [
        'burger' => 50,
        'fries' => 75,
        'steak' => 150
    ];

    // Calculate total cost
    $total = $prices[$order] * $quantity;

    // Check if the user has enough cash
    if ($cash >= $total) {
        $change = $cash - $total;

        // Store details in session to display in receipt.php
        $_SESSION['total'] = $total;
        $_SESSION['cash'] = $cash;
        $_SESSION['change'] = $change;
        $_SESSION['time'] = date('m/d/Y h:i:s a', time());
        $_SESSION['error'] = null; // Clear any previous error messages

    } else {
        // If cash is insufficient, set an error message in the session
        $_SESSION['error'] = "Sorry, balance not enough. You need " . ($total - $cash) . " more.";
    }
    
    // Redirect to receipt.php regardless of the transaction result
    header('Location: receipt.php');
    exit();
}
?>