<?php
// CIS-2286 Assignment #2
// Connor Moreland
// Date Created: October 2nd, 2025
// Date Updated: October 2nd, 2025
// Description: Input page for PEI Income Tax Return
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>2024 PEI Tax Return Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="caption">2024 PEI Income Tax Return Form</h1>
    </div>
    <form class="form-container" action="processTaxReturn.php" method="post">
        <div class="row">
            <label for="title">Title:</label>
            <select name="title" id="title">
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
                <option value="Dr.">Dr.</option>
                <option value="Capt.">Capt.</option>
            </select>
        </div>

        <div class="row">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" required>
        </div>

        <div class="row">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" required>
        </div>

        <div class="row">
            <label for="postalCode">Postal Code:</label>
            <input type="text" name="postalCode" id="postalCode" required>
        </div>

        <div class="row">
            <label for="address">Address:</label>
            <textarea name="address" id="address" cols="60" rows="5" required></textarea>
        </div>

        <div class="row">
            <label for="grossIncome">Gross Income:</label>
            <input type="number" name="grossIncome" id="grossIncome" required>
        </div>

        <div class="row">
            <label for="fullTimeStudent">Are you a full-time student?</label>
            <input type="checkbox" name="fullTimeStudent" id="fullTimeStudent">
        </div>

        <input class="btnCalculateTax" type="submit" value="Calculate Tax">
    </form>
</div>
</body>
</html>