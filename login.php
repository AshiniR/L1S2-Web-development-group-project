<?php
include_once 'item-details-nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .loginform {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .loginform-label {
            font-weight: bold;
            color: #333;
        }

        .loginform-input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
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
            background-color: #0056b3;
        }

        .loginform-button a {
            text-decoration: none;
            color: #fff;
        }

        .loginform-message {
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
        }

        .loginform-message button {
            background: none;
            border: none;
            padding: 0;
            font-size: 14px;
            cursor: pointer;
            color: #007bff;
        }

        .loginform-message button:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="loginform">
        <form action="includes/login.inc.php" method="post">
            <label for="email" class="loginform-label">Email</label><br>
            <input type="text" name="email" id="email" class="loginform-input" placeholder="Enter your Email"><br><br>
            <label for="password" class="loginform-label">Password</label><br>
            <input type="password" name="password" id="password" class="loginform-input" placeholder="Enter your Password"><br><br>
            <button type="submit" name="submit" class="loginform-button">Login</button>
            <p class="loginform-message">New member?<button><a href="sign.php">Register</a></button></p>
        </form>

    </div>

</body>

</html>