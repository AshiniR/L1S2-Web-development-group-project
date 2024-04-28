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
                <form role="search" id="form1" class="form">
                    <div class="search-form">
                        <?php
                        if ((isset($_GET['search']) && !empty($_GET['search']))) {
                            $search_val = $_GET['search'];
                        } else {
                            $search_val = '';
                        }
                        echo "<input type='search' id='query' name='search' placeholder='Search...' aria-label='Search through site content' value='$search_val' >";
                        ?>
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
                            </svg>
                        </button>
                    </div>

                    <span class="filter-text">Filter Items</span>
                    <br><br>
                    <span class="filter_price">Filter by Price</span><br>
                    <?php
                    if (isset($_GET['min'])) {
                        $min = $_GET['min'];
                        $max = $_GET['max'];
                    } else {
                        $min = '';
                        $max = '';
                    }
                    echo
                    "<input type='number' step='0.01' name='min' id='min' min='0' placeholder='MIN' value='$min'>
                            <span> -</span>
                            <input type='number' step='0.01' name='max' id='max' min='0' placeholder='MAX' value='$max'>";
                    ?>
                    <br><br>
                    <input type="submit" name="submit" class="filter-btn" id="submit" value="Filter">
                </form>
            </div>

        </div>

        <div class="part2">
            <div class="text">
                <h1 id='upper-text'>EVERYTHING</h1>
            </div>
            <div class="items">
                <?php
                if ((isset($_GET['search']) && !empty($_GET['search']))) {
                    $search_text = $conn->real_escape_string($_GET['search']);
                    if (isset($_GET['min']) || isset($_GET['max'])) {
                        if ((!empty($_GET['min'])) && (!empty($_GET['max']))) {
                            $min = $_GET['min'];
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%' AND price BETWEEN $min AND $max";
                        } else if (!empty($_GET['min'])) {
                            $min = $_GET['min'];
                            $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%' AND $min<=price";
                        } else if (!empty($_GET['max'])) {
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%' AND $max>=price";
                        } else {
                            $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%'";
                        }
                    } else {
                        $sql = "SELECT * FROM men WHERE name LIKE '%$search_text%'";
                    }
                    $text_result = $_GET['search'];
                } else {
                    if (isset($_GET['min']) || isset($_GET['max'])) {
                        if ((!empty($_GET['min'])) && (!empty($_GET['max']))) {
                            $min = $_GET['min'];
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM men WHERE price BETWEEN $min AND $max";
                        } else if (!empty($_GET['min'])) {
                            $min = $_GET['min'];
                            $sql = "SELECT * FROM men WHERE $min<=price";
                        } else if (!empty($_GET['max'])) {
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM men WHERE $max>=price";
                        } else {
                            $sql = "SELECT * FROM men";
                        }
                    } else {
                        $sql = "SELECT * FROM men";
                    }
                    $text_result = 'ALL ITEMS';
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['name'];
                        $img = $row['img'];
                        $tag = $row['id'];
                        $price = $row['price'];
                        $category = $row['category'];
                        echo "
                        <div class='item-box'>
                            <a href='item-details.php?$tag'>
                                <div class='image' id='image$tag'>
                                <img src='../$img'>
                                </div>
                            </a>
                            <div class='details'>
                                <a href='item-details.php?$tag'>
                                    <span class='name'>$name</span><br>
                                </a>
                                <span class='category'>$category</span><br>
                                <span class='price'>$price USD</span>
                            </div>
                        </div>
                        <script>
                            document.getElementById('image$tag').style.backgroundImage = \"url('../$img')\";
                            document.getElementById('upper-text').innerHTML = 'SHOW RESULTS: \'$text_result\'';
                        </script>
                            ";
                    }
                } else {
                    echo "
                        <script>
                            document.getElementById('upper-text').innerHTML = 'NO RESULTS FOR \'$text_result\'';
                        </script>
                    ";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>