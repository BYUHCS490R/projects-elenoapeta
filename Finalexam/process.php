<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $details = htmlspecialchars($_POST['details']);
} else {
    header("Location: contact.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted - Game Hutt Tech Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Thank You!</h1>
</header>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="repairs.html">Common Repairs</a></li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>

<div class="container">
    <h2>We received your request!</h2>
    <p>Here is the information you submitted:</p>
    <ul>
        <li><strong>Name:</strong> <?php echo $name; ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Service Requested:</strong> <?php echo $service; ?></li>
        <li><strong>Additional Details:</strong> <?php echo $details; ?></li>
    </ul>
    <p>We will contact you shortly.</p>
</div>

<footer>
    <p>&copy; 2025 Game Hutt Tech Services</p>
</footer>
</body>
</html>

