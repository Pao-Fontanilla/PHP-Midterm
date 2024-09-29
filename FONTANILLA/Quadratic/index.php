<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Number 1</title>
</head>
<body>
	<?php session_start(); ?> <!-- Start the session to access session variables -->

	<h1>Discriminant of a quadratic equation</h1> 
	
	<!-- Form to input numbers for the quadratic equation -->
	<form action="handleForm.php" method="POST"> <!-- Form submission will be sent to handleForm.php -->
		<p>A: <input type="number" placeholder="Value of a here" name="A" required></p> <!-- required input fill out Input field for A -->
		<p>B: <input type="number" placeholder="Value of b here" name="B" required></p> <!-- required input fill out Input field for B -->
        <p>C: <input type="number" placeholder="Value of c here" name="C" required></p> <!-- required input fill out Input field for C -->
		<p><input type="submit" value="Submit" name="submitBtn"></p> <!-- Submit button to submit the form -->
    </form>
</body>
</html>