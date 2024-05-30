<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        div {
            display: inline-block;
        }

        .sign-image {
            width: 60%;
            height: 100vh;
            overflow: hidden;
        }

        .sign-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .signform {
            margin-top: 4px;
            position: absolute;
            top: 0;
            width: 39%;
            padding: 20px;
            background-color: #fff;
        }

        .signform form {
            width: 75%;
            margin: 0 auto;
        }

        .signform-label {
            font-weight: bold;
            color: #333;
        }

        .signform-input {
            width: 100%;
            padding: 10px;
            margin-top: 1.2px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signform-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .signform-button:hover {
            animation: anim 0.4s ease forwards;
        }

        .signform-button a {
            text-decoration: none;
            color: #fff;
        }

        .signtext {
            font-size: 30px;
            font-weight: bold;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        hr {
            font-weight: bold;
        }

        label,
        p,
        a {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .signform-message {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            font-size: 20px;
        }

        .homebtn {
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

        .homebtn:hover {
            animation: back 0.4s ease forwards;
        }

        @keyframes anim {
            to {
                background-color: #0056b3;
            }
        }

        @keyframes back {
            to {
                background-color: grey;
            }
        }

        a {
            text-decoration: none;
            color: white;
        }

        .error {
            color: red;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="sign-image">
        <img src="images/background/sign.jpg" alt="">
    </div>
    <div class="signform">
        <form action="includes/sign.inc.php" method="post">
            <div class="signtext">Sign in</div>
            <br>
            <hr><br>
            <label for="name" class="sign-label">Name</label><br>
            <input type="text" name="name" id="name" class="signform-input" placeholder="Enter your Name" required><br>
            <label for="email" class="sign-label">Email</label><br>
            <input type="text" name="email" id="email" class="signform-input" placeholder="Enter your Email" required><br>
            <label for="uname" class="sign-label">User name</label><br>
            <input type="text" name="uname" id="uname" class="signform-input" placeholder="Enter your User name" required><br>
            <label for="password" class="sign-label">Password</label><br>
            <input type="password" name="password" id="password" class="signform-input" placeholder="Enter your Password" required><br>
            <label for="password" class="sign-label">Again Password</label><br>
            <input type="password" name="againpassword" id="againpassword" class="signform-input" placeholder="Enter your Password again" required><br>
            <button type="submit" name="submit" class="signform-button">Register</button>

            <?php
            if (isset($_GET["error"]) && !empty($_GET['error'])) {
                echo "<div class='error'>Error</div>";
            }
            ?><br><br>
            <hr><br>
            <div class="signform-message">Already Have an Account ?</div><br>
            <a href="login.php"><button type="button" class="signform-button">Log In</button></a><br>
            <br>
            <a href="index.php"><button type="button" class="homebtn">BACK TO HOME</button></a>
        </form>
    </div>
</body>

</html>