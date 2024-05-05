<?php require 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cart {
            background-color: rgb(239, 237, 237);
            position: fixed;
            height: 100vh;
            width: 38%;
            right: 0;
            inset: 104px -38% 0 auto;
            transition: 0.5s;
        }

        .cart .close-btn {
            position: absolute;
            text-align: right;
            top: 10px;
            right: 10px;
            padding: 10px;
        }

        .close-btn svg {
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        .cart div {
            width: 80%;
            margin: 0 auto 0 auto;
        }

        .cart .cart-items {
            height: 65%;
            overflow-y: auto;
            margin-top: 10px;
        }

        .cart-text {
            margin-top: 5px;
        }

        .cart-text {
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
        }

        .cart .cart-info {
            height: 35%;
            background-color: rgb(200, 237, 237);
        }

        .cart .cart-items .cart-item-card {
            width: 100%;
            height: 20%;
            position: relative;
        }

        .cart .cart-items .cart-item-card .cart-img {
            float: left;
            width: 30%;
            margin-right: 20px;
            height: 100%;
            background-position: center;
            background-size: cover;
        }



        .cart .cart-items .cart-item-card div {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
        }

        .cart .cart-items .cart-item-card .item-name {
            font-size: 20px;
            font-weight: bold;
        }

        .cart .cart-items .cart-item-card .item-price {
            font-size: 15px;
        }

        .cart .cart-items .cart-item-card .item-count {
            font-size: 15px;
        }

        .cart .cart-items .cart-item-card .item-total {
            font-size: 18px;
        }

        .item-tot-info {
            background-color: blueviolet;
            display: flex;
            position: absolute;
            bottom: 0;
            left: 25%;
            width: 40%;
        }

        .cart .cart-items .cart-item-card .cart-img .item-tot-info div {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        body.cartShow .cart {
            inset: 104px 0 0 auto;
        }

        body.cartShow .main-content {
            transform: translateX(-30%);
        }

        .main-content {
            transition: transform 0.5s;
        }

        span {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            color: black;
            font-size: 23px;
        }
    </style>

</head>

<body class="">
    <div class="cart">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
        <div class="cart-text"><br>
            <?php
            if (isset($_SESSION['useruid'])) {
                $n =  $_SESSION['useruid'];
                echo "<span class='cart-text'>CART - $n</span>
                <hr>";
            } else {
                echo "<span class='cart-text'>PLEASE LOG IN !</span>
                <hr>";
            }
            ?>
        </div>

        <div class="cart-items">
            <?php
            $tot = 0;
            if (isset($_SESSION['useruid'])) {
                $userID = $_SESSION['userid'];
                $sql2 = "SELECT * FROM usercart WHERE Userid = $userID";
                $res = $conn->query($sql2);
                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        $tag = $row['item'];
                        $count = $row['count'];
                        $s = "SELECT * FROM everything WHERE id=$tag";
                        $r = $conn->query($s);
                        $rw = $r->fetch_assoc();
                        $price = $rw['price'] * $row['count'];
                        $img = $rw['img'];
                        $name = $rw['name'];
                        $category = $rw['category'];
                        $tot = $tot + $price;

                        echo "<div class='cart-item-card'>
                        <div class='cart-img' id='img$tag'></div>
                        <div class='cart-item-details'>
                            <div class='item-name'>$name</div>
                            <div class='item-price'>$price USD</div>
                            <div class='item-count'>item count - $count</div>
                            <div class='item-total'>Total - $price USD</div>
                        </div>
                    </div><br>
                    
                    <script>
                    let x= document.getElementById('img$tag');
                    x.style.backgroundImage = 'url(\"$img\")';
                    </script>

                    ";
                    }
                }
            }
            ?>

        </div>
        <div class="cart-info">
            <?php
            if (isset($_SESSION['useruid'])) {
                echo "<span class='cart-total'>Total - $tot USD</span><br>
                <button>PROCEED TO CHECKOUT</button>";
            }
            ?>
        </div>
    </div>
    <script>
        let cart = document.querySelector(".cart");
        let cartBtn = document.querySelector(".nav-bar-cart");
        let closeBtn = document.querySelector(".close-btn");
        let body = document.querySelector("body");

        cartBtn.addEventListener("click", () => {
            body.classList.toggle("cartShow");
        });
        closeBtn.addEventListener("click", () => {
            body.classList.remove("cartShow");
        });

        window.addEventListener('scroll', () => {
            let scrollTop = window.scrollY;

            if (scrollTop > 104) {
                cart.style.top = "0";


            } else {
                cart.style.top = "104px";
            }
        });
    </script>
</body>

</html>