<?php require "../includes/database.inc.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="men.css" />
    <title>men</title>
</head>

<body>
    <div class="header">
        <?php require "men-navbar.php" ?>
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
                            $sql = "SELECT * FROM everything WHERE name LIKE '%$search_text%' AND price BETWEEN $min AND $max AND category='men'";
                        } else if (!empty($_GET['min'])) {
                            $min = $_GET['min'];
                            $sql = "SELECT * FROM everything WHERE name LIKE '%$search_text%' AND $min<=price AND category='men'";
                        } else if (!empty($_GET['max'])) {
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM everything WHERE name LIKE '%$search_text%' AND $max>=price AND category='men'";
                        } else {
                            $sql = "SELECT * FROM everything WHERE name LIKE '%$search_text%' AND category='men'";
                        }
                    } else {
                        $sql = "SELECT * FROM everything WHERE name LIKE '%$search_text%' AND category='men'";
                    }
                    $text_result = $_GET['search'];
                } else {
                    if (isset($_GET['min']) || isset($_GET['max'])) {
                        if ((!empty($_GET['min'])) && (!empty($_GET['max']))) {
                            $min = $_GET['min'];
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM everything WHERE price BETWEEN $min AND $max AND category='men'";
                        } else if (!empty($_GET['min'])) {
                            $min = $_GET['min'];
                            $sql = "SELECT * FROM everything WHERE $min<=price AND category='men'";
                        } else if (!empty($_GET['max'])) {
                            $max = $_GET['max'];
                            $sql = "SELECT * FROM everything WHERE $max>=price AND category='men'";
                        } else {
                            $sql = "SELECT * FROM everything WHERE category='men'";
                        }
                    } else {
                        $sql = "SELECT * FROM everything WHERE category='men'";
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
                            <a href='../item-details.php?id=$tag'>
                                <div class='image' id='image$tag'>
                                <img src='$img'>
                                </div>
                            </a>
                            <div class='details'>
                                <a href='../item-details.php?id=$tag'>
                                    <span class='name'>$name</span><br>
                                </a>
                                <span class='category'>$category</span><br>
                                <span class='price'>$price USD</span>
                            </div>
                        </div>
                        <script>
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
    <br><br><br>
    <button class="top" title="move to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
        </svg>
    </button>
    <?php require 'footer.php'; ?>
    <script>
        let top_btn = document.querySelector('.top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 140) {
                top_btn.style.display = 'block';
            } else {
                top_btn.style.display = 'none';
            }
        });

        top_btn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>