<?php require "includes/database.inc.php" ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Clothing Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require 'item-details-nav.php' ?>
    <main>
        <section class="contact-form">
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send</button>
            </form>
        </section>
    </main>
    <?php require 'footer.php'; ?>
</body>

</html>