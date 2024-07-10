<?php
session_start(); // Ensure the session is started
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile sign in</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .signin-form {
            width: 350px;
            height: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .sign-in-text {
            text-align: center;
            margin-bottom: 20px;
        }

        .sign-up-text {
            text-align: center;
            margin-top: 10px;
            a{
                text-decoration: none;
                color: blue;
            }
        }

        .g-recaptcha {
            margin-top: 20px;
            margin-left: 3px;
        }

        .error {
            color: red;
            text-align: center;
            position: relative;
        }

        .Forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .Forgot-password a{
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="signin-form">
        <h2 class="sign-in-text">Sign In</h2>
        <form action="../database-server/profile_details_db.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" name="submit"  value="Sign In">
            <?php
            echo "<p class='Forgot-password'><a href='forgot-password.php'>Forgot password?</a></p>"
            ?>

            <!-- Google reCAPTCHA widget -->
            <div class="g-recaptcha" data-sitekey="6LdEH_8pAAAAANm6y8-m4mLGtRaGU_mtNyTAAPVW"></div>

        </form>
        <!-- php error handle captcha -->
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']); // Clear the error message
                ?>
            </div>
        <?php endif; ?>
        <!-- New account creation -->
        <?php
        echo "<p class='sign-up-text'>Don't have an account? <a href='sign-up.php'>Sign up</a></p>";
        ?>
    </div>
    <!-- Include the Google reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>