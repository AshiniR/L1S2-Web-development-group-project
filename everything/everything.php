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

        <div class="part1">
            <div class="page_filter">
                <form role="search" id="form1" class="page_search">
                    <input type="search" id="query" name="search" placeholder="Search..." aria-label="Search through site content">
                    <button>
                        <svg viewBox="0 0 1024 1024">
                            <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
                        </svg>
                    </button>
                </form>

                <span class="filter-text">Filter Items</span>
                <form id="form2" class="filter">
                    <input type="text" name="" id="">
                </form>
            </div>

        </div>

        <div class="part2">
            <div class="text">
                <h1>EVERYTHING</h1>
                <span>Browse every items in our shop...</span>
            </div>
            <div class="items">
                <?php
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    $search_text = $conn->real_escape_string($_GET['search']);
                    $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%'";
                } else {
                    $sql = "SELECT * FROM men";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['name'];
                        $img = $row['img'];
                        $tag = $row['id'];
                        echo "
                        <div class='item-box'>
                            <div class='image' id='image$tag'></div>
                            <div class='details'>
                                <span class='name'>$name</span><br>
                                <span class='category'>men</span><br>
                                <span class='price'>price</span>
                            </div>
                        </div>
                        <script>
                            document.getElementById('image$tag').style.backgroundImage = \"url('$img')\";
                        </script>
                            ";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>