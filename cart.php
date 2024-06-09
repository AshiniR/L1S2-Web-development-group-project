<?php require "includes/database.inc.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .cart {
            background-color: var(--bg1);
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
            height: 60%;
            overflow-y: auto;
            margin-top: 10px;
        }

        .cart-text {
            margin-top: 5px;
        }

        .cart-text {
            color: var(--color1);
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
        }

        .cart .cart-info {
            margin-top: 25px;
            background-color: white;
            height: 40%;
            padding: 10px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .cart .cart-info button {
            all: unset;
            background-color: black;
            color: white;
            cursor: pointer;
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            font-size: 17px;
            padding: 10px 20px;
            border: 1px solid white;
        }

        .cart .cart-info button:hover {
            animation: colorH2 0.3s ease forwards;
        }

        @keyframes colorH2 {
            to {
                color: black;
                background-color: lightgray;
            }
        }

        .cart .cart-items .cart-item-card {
            width: 95%;
            height: 26%;
            position: relative;
            padding: 4px;
            border: 0.5px solid black;
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

        .cart .cart-items .cart-item-card .cart-img {
            overflow: hidden;
        }

        .cart .cart-items .cart-item-card .cart-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        .delete {
            position: absolute;
            right: 30px;
            bottom: 50px;
        }

        .delete svg {
            color: black;
            height: 22px;
            width: 22px;
        }

        .delete svg:hover {
            animation: colorH4 0.3s ease forwards;
        }

        .cart-item-details,
        .delete svg,
        .close-btn {
            color: var(--color1);
        }

        @keyframes colorH4 {
            to {
                color: red;
            }
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
                        <div class='cart-img' id='img$tag'>
                        <img src='$img'>
                        </div>
                        <div class='cart-item-details'>
                            <div class='item-name'>$name</div>
                            <div class='item-price'>$price USD</div>
                            <div class='item-count'>item count - $count</div>
                            <div class='item-total'>Total - $price USD</div>
                        </div>
                        <a href='includes/deletecartitem.php?id=$tag' class='delete'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
                      </svg>
                        </a>
                    </div><br>

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
        let cart_items = document.querySelector(".cart-items");
        let info = document.querySelector(".cart-info");
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

            if (scrollTop > 10) {
                cart.style.top = "0";
                cart_items.style.height = "70%";
                info.style.height = "30%";
            } else {
                cart.style.top = "104px";
                cart_items.style.height = "60%";
                info.style.height = "40%";
            }
        });
    </script>
</body>

</html>