<?php require 'database.php'; ?>
<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        .img-content {
            background-color: #f5f7f9;
            display: block;
            /*margin-bottom: 20%;*/
            padding-bottom: 25%;
            padding-top: 4%;
        }

        .paths {
            margin-bottom: 15px;
        }

        .paths a {
            text-decoration: none;
            color: #777;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .cat-path a {
            text-decoration: none;
            color: black;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 480;

        }

        .cat-path a:hover {
            color: #6EC1E4;
        }

        .anchor {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 450;
        }

        img:hover {
            cursor: zoom-in;
        }

        .container {
            min-width: 600px;
            min-height: 600px;
            float: left;
            margin-right: 3%;
            margin-left: 10%;
            padding-top: 4%;

        }

        .img-container {
            max-width: 700px;
            height: 700px;
            overflow: hidden;
            position: relative;
            box-sizing: inherit;
            padding-top: 4%;

        }

        .img-container img {
            width: 100%;
            display: block;
            position: absolute;
        }

        .img-container:hover {
            cursor: zoom-in;
        }

        .p-price .price {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
            font-size: 30px;
            color: #333333;
        }

        .shipping {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .color-box {
            height: 28px;
            width: 48px;
            font-size: 12px;
            padding: 4px;
            background-color: white;
            border-radius: 9%;
            border-color: #e2e2e2;
            border-width: 0.1cap;
        }

        .color-box:hover {
            border-color: #333333;
        }

        h5 {
            margin-top: 0.7%;
            margin-bottom: 1%;
            font-size: 12px;
            color: #7A7A7A;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
        }

        hr .hori-line {
            height: 0.5px;
            background-color: #e2e2e2;
            border: none;
        }

        .no-box {
            width: 3.5em;
            text-align: center;
            min-height: 30px;
            border-color: #e2e2e2;
            background-color: white;
            border-width: 0.1cap;
            box-shadow: none;
            border-radius: 0%;
            margin-top: 0.5%;
            margin-bottom: 0.5%;
            color: #666;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            margin-right: 1%;

        }

        .cartbtn {
            min-height: 33px;
            width: 300px;
            padding-top: 10px;
            padding-right: 20px;
            padding-bottom: 10px;
            padding-left: 20px;
            border-style: solid;
            color: #ffffff;
            border-width: 0;
            border-color: #0084d6;
            background-color: #0084d6;
            font-size: 'Lato', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            letter-spacing: 1px;
        }

        .cartbtn:hover {
            background-color: #0172b8;
            cursor: pointer;
        }

        .SKU {
            margin-right: 15px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .cate a {
            text-decoration: none;
            color: #333333;
        }

        .cate a:hover {
            color: #6EC1E4;
        }

        .top {
            all: unset;
            position: fixed;
            z-index: 1000;
            bottom: 25px;
            right: 25px;
            background-color: white;
            border-radius: 50%;
            height: 50px;
            width: 50px;
            cursor: pointer;
            display: none;
            border: 2px solid black;
        }

        .top svg {
            text-align: center;
            height: 32px;
            width: 32px;
            padding: 8px;
        }

        .cartbtn a {
            text-decoration: none;
            color: white;
        }

        @media screen and (max-width:435px) {
            .nav-bar-logo img {
                width: 30px;
            }

            .nav-bar a:not(.nav-bar-icons a, .nav-bar-links-everything) {
                padding: 8px 3px 8px 3px;
                font-size: 5.3px;
            }

            .nav-bar-links-everything {
                padding: 8px 3px 8px 3px;
                font-size: 7.3px;
                margin-left: 30px;
            }

            .nav-bar-icons a {
                padding-top: 8px;
                padding-left: 3px;
            }

            .nav-bar-icons {
                padding-left: 8px;
                margin-right: 3px;
            }

            .nav-bar .nav-bar-icons a,
            .nav-bar .nav-bar-icons button {
                margin-left: 3px;
            }

            .nav-bar .nav-bar-icons svg {
                width: 10px;
                height: 10px;
            }

            .container {
                min-width: 200px;
                min-height: 200px;
                margin-right: 2%;
                margin-left: 5%;
                padding-top: 3%;

            }

            .img-container {
                max-width: 300px;
                height: 300px;
                padding-top: 3%;

            }

            .nav-bar-night,
            .nav-bar-day {
                padding-top: 8px;
                padding-left: 3px;
            }

            .nav-bar-icons button {
                padding-top: 8px;
                padding-left: 3px;
            }

            .paths a {
                font-size: 8px;
            }

            .paths {
                margin-bottom: -2px;
            }

            .cat-path a {
                font-size: 8px;
            }

            .anchor {
                font-size: 15px;
                margin-top: 5px;
                margin-bottom: 6px;
            }

            .p-price .price {
                font-size: 12px;
            }

            .shipping {
                font-size: 8px;
            }

            .color-box {
                height: 10px;
                width: 30px;
                font-size: 6px;
                padding: 2px;
            }

            h5 {
                font-size: 5px;
            }

            .no-box {
                width: 30px;
                min-height: 15px;
                font-size: 10px;
            }

            .cartbtn {
                min-height: 15px;
                width: 120px;
                padding-top: 3px;
                padding-right: 10px;
                padding-bottom: 3px;
                padding-left: 10px;
                font-size: 9px;
            }

            .SKU {
                margin-right: 2px;
                font-size: 8px;
            }

            .cate a {
                font-size: 8px;
            }

            .cate {
                font-size: 8px;
            }

            .img-content {
                padding-bottom: 10%;
            }

            .p-price {
                margin-top: 10px;
                margin-bottom: 5px;
            }

            h5 {
                margin-top: 2px;
                margin-bottom: 3px;
            }

            .hori-line {
                margin-top: 3px;
                margin-bottom: 5px;
            }

            .hori-buttom {
                margin-top: 5px;
                margin-bottom: 2px;
            }
        }
    </style>

<body>
    <?php require 'item-details-nav.php'; ?>

    <!--code for the content-->
    <?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM everything WHERE id=$id";
        $result = $conn->query($sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                $name = $row['name'];
                $img = $row['img'];
                $price = $row['price'];
                $category = $row['category'];
                echo "<div class='picture_w_details'>
                <div class='container'>
                    <div class='img-container'>
                        <img src='$img' alt=' id='cartbtn-img'>
                    </div>
                </div>
                <div class='img-content'>
                    <div class='cat-path'>
                        <a href='women/women.php'>$category</a>
                    </div>
                    <h1 class='anchor'>$name</h1>
                    <p class='p-price'><span class='price'>$price USD</span>
                        <span class='shipping'>+Free Shipping</span>
                    </p>
                        <br><br>
                        <hr class='hori-line'>
                        <a href='item-details.php?id=$id&add=$id'>
                        <button class='cartbtn' id='cb'>ADD TO CART</button></a>
                        <hr class='hori-buttom'>
                </div>
            </div>";
            }
        }
    }
    ?>

    <?php
    if (isset($_GET['add']) && !empty($_GET['add']) && isset($_SESSION['useruid'])) {
        $userID = $_SESSION['userid'];
        $id = $_GET['id'];
        $sql = "SELECT * FROM usercart WHERE Userid=$userID AND item=$id;";
        $res1 = $conn->query($sql);
        if ($res1) {
            $x = $res1->num_rows;
            if ($x > 0) {
                $count = $x + 1;
                $sql_ = "UPDATE usercart SET count = $count WHERE Userid=$userID AND item=$id;";
            } else {
                $sql_ = "INSERT INTO usercart (Userid, item,count) VALUES ($userID, $id, 1);";
            }
            $res2 = $conn->query($sql_);
            if ($res2) {
                echo "<script>alert('Added to the cart!!');</script>";
            } else {
                echo "<script>alert('Something went wrong!!');</script>";
            }
        }
    } else if (isset($_GET['add']) && !empty($_GET['add'])) {
        echo "<script>alert('Please Log In !!');</script>";
    }

    ?>
    <button class="top" title="move to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
        </svg>
    </button>
    <script type="text/javascript">
        const imgContElm = document.querySelector(".img-container");
        const imgElm = document.querySelector(".img-container img");

        //percentage of the zoom
        const ZOOM = 200;

        //Event mouse enter
        imgContElm.addEventListener('mouseenter', function() {
            imgElm.style.width = ZOOM + '%';
        });

        //Event mouse leave
        imgContElm.addEventListener('mouseleave', function() {
            imgElm.style.width = '100%';
            imgElm.style.top = '0';
            imgElm.style.left = '0';
        });

        //image movement accroding to the curser movement
        imgContElm.addEventListener('mousemove', function(mouseEvent) {
            let obj = imgContElm;
            let obj_left = 0;
            let obj_top = 0;
            let xpos;
            let ypos;


            while (obj.offsetParent) {
                obj_left += obj.offsetLeft;
                obj_top += obj.offsetTop;
                obj = obj.offsetParent;
            }
            if (mouseEvent) {
                xpos = mouseEvent.pageX;
                ypos = mouseEvent.pageY;
            } else {
                xpos = window.event.x + document.body.scrollLeft - 2;
                ypos = window.event.y + document.body.scrollTop - 2;
            }
            xpos -= obj_left;
            ypos -= obj_top;

            const imgWidth = imgElm.clientWidth;
            const imgHeight = imgElm.clientHeight;

            imgElm.style.top = -(((imgHeight - this.clientHeight) * ypos) / this.clientHeight) + 'px';
            imgElm.style.left = -(((imgWidth - this.clientWidth) * xpos) / this.clientWidth) + 'px';

        });

        //change height of the container
        function changeHeight() {
            imgContElm.style.height = imgContElm.clientWidth + 'px';
        }
        changeHeight();

        //changeHeight
        window.addEventListener('resize', changeHeight);

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

    <!--code for the footer-->
    <?php require 'footer.php'; ?>
</body>
</head>

</html>