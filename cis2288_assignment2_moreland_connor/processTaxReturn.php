<?php
// CIS-2286 Assignment #2
// Connor Moreland
// Date Created: October 2nd, 2025
// Date Updated: October 3rd, 2025
// Description: Process page for PEI Income Tax Return

const TAX_PERCENTAGE = 0.18; // 18%

// Collect form values
$title = $_POST['title'];
$name = $_POST['fname'] . " " . $_POST['lname'];
$address = $_POST['address'];
$postalCode = $_POST['postalCode'];
$grossIncome = floatval($_POST['grossIncome']);

// Check if student
$isFullTimeStudent = isset($_POST['fullTimeStudent']);

// Thresholds
$threshold = $isFullTimeStudent ? 23000 : 16500;

// Calculate taxable income
$taxableIncome = max(0, $grossIncome - $threshold);

// Calculate tax
$taxDeducted = $taxableIncome * TAX_PERCENTAGE;
$incomeAfterTax = $grossIncome - $taxDeducted;

// Format for display
$taxDeductedFormatted = "$" . number_format($taxDeducted, 2);
$incomeAfterTaxFormatted = "$" . number_format($incomeAfterTax, 2);

// Current date/time for Atlantic Canada
date_default_timezone_set("America/Halifax");
$currentDateTime = date("l, F j, Y g:i A");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>2024 PEI Tax Return Results</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .row { padding-bottom: 0.25rem; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1 class="caption">2024 PEI Income Tax Return</h1>
    </div>
    <form class="form-container">
        <div class="row">Title: <?php echo htmlspecialchars($title); ?></div>
        <div class="row">Name: <?php echo htmlspecialchars($name); ?></div>
        <div class="row">Address: <?php echo nl2br(htmlspecialchars($address)); ?></div>
        <div class="row">Postal Code: <?php echo htmlspecialchars($postalCode); ?></div>
        <br>
        <div class="row">Tax Percentage:
            <?php echo $taxableIncome > 0 ? "18%" : "0%"; ?>
        </div>
        <div class="row">Tax Deducted:
            <?php echo $taxableIncome > 0 ? $taxDeductedFormatted : "$0.00"; ?>
        </div>
        <div class="row">Income After Tax:
            <?php echo $incomeAfterTaxFormatted; ?>
        </div>
        <br>
        <div class="row">Date/Time Submitted:
            <?php echo $currentDateTime; ?>
        </div>
    </form>
</div>
</body>
</html>