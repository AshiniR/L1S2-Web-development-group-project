<?php require "../database.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="everything.css" />
    <title>everything</title>
</head>

<body>
    <div class="header">
        <?php require "everything-navbar.php" ?>
    </div>

    <div class="main-content">
        <div class="part1"></div>
        <div class="part2">
            <div class="text">
                <h1>EVERYTHING</h1>
                <span>Browse every items in our shop...</span>
            </div>
            <div class="items">
                <div class="item-box">
                    <div class="image"></div>
                    <div class="details">
                        <span class="name">Name</span><br>
                        <span class="category">men</span><br>
                        <span class="price">price</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>