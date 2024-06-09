<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="men-navbar.css">
</head>

<body>
    <div class="nav-bar">
        <a href="../index.php" class="nav-bar-logo"><img src="../images/logo/logo-b.png" class="iconlogo" alt="logo-white.png" width="180px"></a>
        <a href="../everything/everything.php" class="nav-bar-links-everything">EVERYTHING</a>
        <a href="../women/women.php" class="nav-bar-links">WOMEN</a>
        <a href="men.php" class="nav-bar-links" id="men">MEN</a>
        <a href="../about.php" class="nav-bar-links-about">ABOUT</a>
        <a href="../contacts.php" class="nav-bar-links-contact">CONTACT US</a>
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
            <button class="nav-bar-cart" title="cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                </svg>
            </button>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo '<a href = "" class="nav-bar-user">' . $_SESSION["useruid"] . '</a>';
                echo '<a href = "../includes/logout.inc.php" class="nav-bar-user">Logout </a>';
            } else {
                echo '<a href="../login.php" class="nav-bar-user" title="user profile">Login
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            </a>';
            }
            ?>
        </div>
    </div>

    <?php require '../everything/cart.php'; ?>
    <script>
        document.querySelector('.nav-bar-night').addEventListener('click', () => {
            document.querySelector('.nav-bar-night').style.display = 'none';
            document.querySelector('.nav-bar-day').style.display = 'inline-block';
            localStorage.setItem('theme', 'dark');
            document.body.setAttribute('theme', 'dark');
            document.querySelector('.iconlogo').src = "../images/logo/logo-w.png";
        });
        document.querySelector('.nav-bar-day').addEventListener('click', () => {
            document.querySelector('.nav-bar-night').style.display = 'inline-block';
            document.querySelector('.nav-bar-day').style.display = 'none';
            localStorage.setItem('theme', 'light');
            document.body.setAttribute('theme', 'light');
            document.querySelector('.iconlogo').src = "../images/logo/logo-b.png";
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            const savedTheme = localStorage.getItem('theme') || 'light';
            if (savedTheme === 'dark') {
                document.querySelector('.nav-bar-night').style.display = 'none';
                document.querySelector('.nav-bar-day').style.display = 'inline-block';
                document.body.setAttribute('theme', 'dark');
                document.querySelector('.iconlogo').src = "../images/logo/logo-w.png";
            } else {
                document.querySelector('.nav-bar-night').style.display = 'inline-block';
                document.querySelector('.nav-bar-day').style.display = 'none';
                document.body.setAttribute('theme', 'light');
                document.querySelector('.iconlogo').src = "../images/logo/logo-b.png";
            }
        });
    </script>
</body>

</html>