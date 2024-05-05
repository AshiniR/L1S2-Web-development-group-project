<?php require 'database.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Home - Fabrix</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/test.png">
</head>

<body>
    <div class="header">
        <div class="head-nav">
            <div class="nav-bar">
                <a href="index.php" class="nav-bar-logo"><img src="images/logo/logo-w.png" alt="logo-white.png" width="180px"></a>
                <a href="everything/everything.php" class="nav-bar-links-everything">EVERYTHING</a>
                <a href="women/women.php" class="nav-bar-links">WOMEN</a>
                <a href="men/men.php" class="nav-bar-links">MEN</a>
                <a href="about.php" class="nav-bar-links-about">ABOUT</a>
                <a href="contacts.php" class="nav-bar-links-contact">CONTACT US</a>
                <div class="nav-search">
                    <form role="search" id="form" action="everything/everything.php">
                        <input type="search" id="query" name="search" placeholder="Search..." aria-label="Search through site content">
                        <button>
                            <svg viewBox="0 0 1024 1024">
                                <path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="nav-bar-icons">
                    <button href="" class="nav-bar-night" title="dark mode">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                        </svg>
                    </button>
                    <button class="nav-bar-day">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
                            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                        </svg>
                    </button>
                    <button class="nav-bar-wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg>
                    </button>
                    <button class="nav-bar-cart" title="cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                        </svg>
                    </button>
                    <a href="" class="nav-bar-user" title="user profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="head-content">
            <div class="head-main-text">Dive Into A Shower<br>Of Offers!</div>
            <br>
            <div class="head-second-text">40% Off For New Users!</div>
            <br><button class="head-shop">SHOP NOW</button>
            <a href="#main-content-4"><button class="head-find">FIND MORE</button></a>
        </div>
    </div>

    <button class="top" title="move to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
        </svg>
    </button>

    <div class="main-content">
        <div class="main-content-2">
            <div class="main-content-2-box1">
                <div class="box-text">
                    <span>Discover the Latest Designs <br>for Women</span>
                    <br><br><a href="everything/everything.php"><button class="b">SHOP NOW</button></a>
                </div>
            </div>
            <div class="main-content-2-box2">
                <div class="box-text">
                    <span>Step into elegance with our <br>latest fashion designs</span>
                    <br><br><a href="everything/everything.php"><button class="b">SHOP NOW</button></a>
                </div>
            </div>
            <div class="main-content-2-box3">
                <div class="box-text">
                    <span>Discover the Latest Designs <br>for Men</span>
                    <br><br><a href="everything/everything.php"><button class="b">SHOP NOW</button></a>
                </div>
            </div>
        </div>

        <div class="featured-items">
            <div class="f-info">
                <span>Featured Items</span>
                <hr class="hr">
            </div>
            <div class="items">
                <?php
                $sql = "SELECT * FROM men LIMIT 12";
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
                                    <img src='$img'>
                                    </div>
                                </a>
                                <div class='details'>
                                    <a href='item-details.php?$tag'>
                                        <span class='name'>$name</span><br>
                                    </a>
                                    <span class='category'>$category</span><br>
                                    <span class='price'>$price USD</span>
                                </div>
                            </div>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="main-content-4" id="main-content-4">
            <div class="new-user-offer">
                <div class="text1">40% OFF For New Users!</div>
                <div class="text2">Apply Coupon Code</div>
                <div class="text3">FAB40NEW</div>
                <div class="text4">(only applicable for the first purchase)</div>
                <br><button class="shop-offer">SHOP NOW</button>
            </div>
        </div>

        <div class="box">
            <div class="box1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                </svg><br>
                <div class="image-tittle">Worldwide Shipping</div>
            </div>
            <div class="box2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg><br>
                <div class="image-tittle">Best Quality</div>
            </div>
            <div class="box3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                    <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg><br>
                <div class="image-tittle">Best Offers</div>
            </div>
            <div class="box4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                </svg><br>
                <div class="image-tittle">Secure Payments</div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="ul1">
            <div class="li1">MAY WE HELP YOU?</div><br>
            <div>Contact Us</div>
            <div>My Order</div>
            <div>FAQs</div>
            <div>Email Unsubscribe</div>
            <div>Sitemap</div>
        </div>
        <div class="ul2">
            <div class="li1">THE COMPANY</div><br>
            <div>About Fabrix</div>
            <div>Code of Ethics</div>
            <div>Careers</div>
            <div>Legal</div>
            <div>Corporate Information</div>
        </div>
        <div class="ul3">
            <div class="li1">Fabrix SERVICES</div><br>
            <div>Discover our services</div>
            <div>Book an Appointment</div>
            <div>Collect In-Store</div>
        </div><br><br>
        <div class="footer-logo">
            <div>F</div>
            <div>A</div>
            <div>B</div>
            <div>R</div>
            <div>I</div>
            <div>X</div>
        </div>
        <div>
            <a href="#"><img src="images/icons/twiiter.png" alt="twitter" width="70px" height="40px"></a>
            <a href="#" class="footer-icon1"><img src="images/icons/facebook.png" alt="facebook" width="70px" height="50px"></a>
            <a href="#" class="footer-icon2"><img src="images/icons/youtube.png" alt="youtube" width="55px" height="45px"></a>
            <a href="#" class="footer-icon3"><img src="images/icons/insragram.png" alt="instragram" width="70px" height="50px"></a>
        </div>
        <div class="footer-last">© 2023 Fabrix, Inc. All Rights Reserved</div>
    </div>

    <div class="bg"></div>
    <div class="cart">
        <div class="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
            </svg>
        </div>
        <div class="cart-text"><br>
            <span class="cart-text">CART</span>
            <hr>
        </div>

        <div class="cart-items">

            <div class="cart-item-card">
                <div class="cart-img"></div>
                <div class="cart-item-details">
                    <div class="item-name">Sample Name</div>
                    <div class="item-price">100 USD</div>
                    <div class="item-count">item count - 3</div>
                    <div class="item-total">Total - 300 USD</div>
                </div>
            </div><br>
            <div class="cart-item-card">
                <div class="cart-img"></div>
                <div class="cart-item-details">
                    <div class="item-name">Sample Name</div>
                    <div class="item-price">100 USD</div>
                    <div class="item-count">item count - 3</div>
                    <div class="item-total">Total - 300 USD</div>
                </div>
            </div><br>
            <div class="cart-item-card">
                <div class="cart-img"></div>
                <div class="cart-item-details">
                    <div class="item-name">Sample Name</div>
                    <div class="item-price">100 USD</div>
                    <div class="item-count">item count - 3</div>
                    <div class="item-total">Total - 300 USD</div>
                </div>
            </div><br>
            <div class="cart-item-card">
                <div class="cart-img"></div>
                <div class="cart-item-details">
                    <div class="item-name">Sample Name</div>
                    <div class="item-price">100 USD</div>
                    <div class="item-count">item count - 3</div>
                    <div class="item-total">Total - 300 USD</div>
                </div>
            </div><br>
            <div class="cart-item-card">
                <div class="cart-img"></div>
                <div class="cart-item-details">
                    <div class="item-name">Sample Name</div>
                    <div class="item-price">100 USD</div>
                    <div class="item-count">item count - 3</div>
                    <div class="item-total">Total - 300 USD</div>
                </div>
            </div><br>
        </div>
        <div class="cart-info">
            <span class="cart-total">Total - 300 USD</span><br>
            <button>PROCEED TO CHECKOUT</button>
        </div>
    </div>

    <script>
        let cart = document.querySelector(".cart");
        let cartBtn = document.querySelector(".nav-bar-cart");
        let closeBtn = document.querySelector(".close-btn");
        let body = document.querySelector("body");
        let header = document.querySelector('.header');

        cartBtn.addEventListener("click", () => {
            body.classList.toggle("cartShow");
            body.style.overflow = 'hidden';
            header.style.animation = 'opa ease forwards 0.4s';
        });
        closeBtn.addEventListener("click", () => {
            body.classList.remove("cartShow");
            body.style.overflow = 'auto';
            header.style.animation = 'opa2 ease forwards 0.4s';
        });

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