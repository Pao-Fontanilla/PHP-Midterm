<!DOCTYPE html>
<html lang="en">
<style>
table, th, td {
  border: 1px solid black; 
  width: 250px;
}
</style>
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number 3</title> 
</head>
<body>
    <h1>Menu</h1> 

    <table> <!-- table -->
        <tr>
            <th>Order</th> 
            <th>Amount</th> 
        </tr>
        <tr>
            <td>Burger</td> 
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td> 
            <td>150</td> 
        </tr>
    </table>

    <form action="handleForm.php" method="POST"> <!-- Form for submitting the order -->
        <p>
            <label for="order">Select an order:</label> 
            <select name="order" id="order"> <!-- Dropdown for selecting an order -->
                <option value="burger">Burger</option> 
                <option value="fries">Fries</option> 
                <option value="steak">Steak</option> 
            </select>
        </p>

        <p>
            <label for="quantity">Quantity:</label> 
            <input type="number" name="quantity" id="quantity" required> <!-- Input for quantity -->
        </p>

        <p>
            <label for="cash">Cash:</label> 
            <input type="number" name="cash" id="cash" required> <!-- Input for cash -->
        </p>

        <p><input type="submit" value="Submit"></p> <!-- Submit button for the form -->
    </form>
</body>
</html>