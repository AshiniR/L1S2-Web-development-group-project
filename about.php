<?php require 'database.php'; ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php require 'item-details-nav.php' ?>
    <header>
        <h1>About Us</h1>
        <p>Welcome to Fabric Clothing - Your Ultimate Destination for Quality Fabrics and Fashion!</p>
    </header>
    <main>
        <section>
            <h2>Our Story</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac magna sit amet ligula luctus fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi.</p>
        </section>
        <section>
            <h2>Our Mission</h2>
            <p>Our mission is to provide our customers with the highest quality fabrics and clothing, sourced responsibly and crafted with care.</p>
        </section>
        <section>
            <h2>Our Values</h2>
            <ul>
                <li>Quality</li>
                <li>Integrity</li>
                <li>Innovation</li>
                <li>Sustainability</li>
                <li>Customer Satisfaction</li>
            </ul>
        </section>
        <section>
            <h2>Meet Our Team</h2>
            <p>Our team is made up of passionate individuals dedicated to bringing you the best in fashion and fabric. We're designers, seamstresses, and fashion enthusiasts!</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Fabric Clothing. All rights reserved.</p>
    </footer>
</body>

</html>