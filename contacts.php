<?php require "includes/database.inc.php" ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .contact-section,
        .message-section {
            text-align: center;
            padding: 50px 20px;
        }

        .contact-section h2,
        .message-section h2 {
            color: #555;
        }

        .contact-section h1,
        .message-section h1 {
            margin-bottom: 30px;
        }

        .contact-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .contact-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 220px;
            text-align: center;
        }

        .contact-card h3 {
            margin-bottom: 15px;
        }

        .contact-card p {
            margin-bottom: 10px;
            color: #777;
        }

        .contact-card a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #f4f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .message-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            padding: 20px;
            background-color: #f4f7fa;
        }

        .message-container {
            display: flex;
            background: #f4f7fa;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
            height: 500px;
        }

        .message-text {
            flex: 1;
            padding: 40px;
            text-align: left;
        }

        .message-text h2 {
            color: #555;
            margin-bottom: 10px;
        }

        .message-text h1 {
            margin-bottom: 20px;
        }

        .message-text p {
            color: #777;
            margin-bottom: 20px;
        }

        .message-form {
            flex: 1;
            padding: 40px;
            background-color: #fff;
        }

        .message-form form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            height: 500px;
        }

        .message-form input,
        .message-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .message-form textarea {
            height: 180px;
        }

        .message-form button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-weight: bold;
            width: 200px;
            height: 40px;
        }

        .message-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php require 'item-details-nav.php';
    require 'cart.php'; ?>
    <section class="contact-section">
        <h2>Have any queries?</h2>
        <h1>We're here to help.</h1>
        <div class="contact-cards">
            <div class="contact-card">
                <h3>Sales</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                <a href="tel:18001234567">1800 123 4567</a>
            </div>
            <div class="contact-card">
                <h3>Complaints</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                <a href="tel:19002238899">1900 223 8899</a>
            </div>
            <div class="contact-card">
                <h3>Returns</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                <a href="mailto:returns@mail.com">returns@mail.com</a>
            </div>
            <div class="contact-card">
                <h3>Marketing</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                <a href="tel:17004445578">1700 444 5578</a>
            </div>
        </div>
    </section>
    <section class="message-section">
        <div class="message-container">
            <div class="message-text">
                <h2>Don't be a stranger!</h2>
                <h1>You tell us. We listen.</h1>
                <p>Cras elementum finibus lacus nec lacinia. Quisque non convallis nisl, eu condimentum sem. Proin dignissim libero lacus, ut eleifend magna vehicula et. Nam mattis est sed tellus.</p>
            </div>
            <div class="message-form">
                <form>
                    <input type="text" name="name" placeholder="NAME" required>
                    <input type="text" name="subject" placeholder="SUBJECT" required>
                    <input type="email" name="email" placeholder="EMAIL" required>
                    <textarea name="message" placeholder="MESSAGE" required></textarea>
                    <button type="submit">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>
</body>

</html>