<?php
session_start(); // Start the session to access the stored data

// Check if transaction details are set
$total = isset($_SESSION['total']) ? $_SESSION['total'] : null;
$cash = isset($_SESSION['cash']) ? $_SESSION['cash'] : null;
$change = isset($_SESSION['change']) ? $_SESSION['change'] : null;
$time = isset($_SESSION['time']) ? $_SESSION['time'] : null;
$error = isset($_SESSION['error']) ? $_SESSION['error'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        /* Style for the receipt container */
        .receipt {
            padding: 20px;
            border: 2px dashed black; 
            font-family: Arial, sans-serif;
        }
        .receipt h1 {
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="receipt"> <!-- Wrapper div for the receipt -->
        <?php if ($error): ?>
            <h2><?php echo $error; ?></h2> <!-- Display error message -->
        <?php else: ?>
            <h1>RECEIPT</h1> <!-- Only display the header if there is no error -->
            <h2>Total Price: <?php echo $total; ?></h2>
            <h2>You Paid: <?php echo $cash; ?></h2>
            <h2>CHANGE: <?php echo $change; ?></h2>
            <h2><?php echo $time; ?></h2>
        <?php endif; ?>
        
    </div>
</body>
</html>