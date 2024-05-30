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

        .login-image {
            width: 60%;
            height: 100vh;
            overflow: hidden;
        }

        .login-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .loginform {
            margin-top: 35px;
            position: absolute;
            top: 0;
            width: 39%;
            padding: 20px;
            background-color: #fff;
        }

        .loginform form {
            width: 75%;
            margin: 0 auto;
        }

        .loginform-label {
            font-weight: bold;
            color: #333;
        }

        .loginform-input {
            width: 100%;
            padding: 10px;
            margin-top: 2.5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .loginform-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .loginform-button:hover {
            animation: anim 0.4s ease forwards;
        }

        .loginform-button a {
            text-decoration: none;
            color: #fff;
        }

        .logtext {
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

        .loginform-message {
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
    <div class="login-image">
        <img src="images/background/login.jpg" alt="">
    </div>
    <div class="loginform">
        <form action="includes/login.inc.php" method="post">
            <div class="logtext">Log in</div>
            <br>
            <hr><br><br>
            <label for="email" class="loginform-label">Email</label><br>
            <input type="text" name="email" id="email" class="loginform-input" placeholder="Enter your Email" required><br><br>
            <label for="password" class="loginform-label">Password</label><br>
            <input type="password" name="password" id="password" class="loginform-input" placeholder="Enter your Password" required><br><br>
            <input type="submit" name="submit" class="loginform-button" value="Login"><br><br>
            <?php
            if (isset($_GET['error']) && !empty($_GET['error'])) {
                echo '<p class="error">Invalid Login</p>';
            }
            ?>
            <hr><br>
            <div class="loginform-message">New member?</div><br>
            <a href="sign.php"><button type="button" class="loginform-button">Register</button></a><br>
            <br><br><br>
            <a href="index.php"><button type="button" class="homebtn">BACK TO HOME</button></a>
        </form>

    </div>

</body>

</html>