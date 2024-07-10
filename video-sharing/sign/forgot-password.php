<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-Password</title>
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

        .forgot-password-form {
            width: 350px;
            height: 350px;
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

            a {
                text-decoration: none;
                color: blue;
            }
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }

        h2 {
            text-align: center;
            margin-bottom: 50px;
            margin-top: 10px;
        }
        .g-recaptcha {
            margin-top: 10px;
            margin-left: 3px;
        }
        .sign-in-account {
            text-align: center;
            margin-top: 10px;
            a{
                text-decoration: none;
                color: blue;
            }
        }
    </style>
</head>

<body>
    <div class="forgot-password-form">
        <h2>Forgot Password</h2>
        <form action="../database-server/password_reset_db.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <!-- Google reCAPTCHA widget -->
            <div class="g-recaptcha" data-sitekey="6LdEH_8pAAAAANm6y8-m4mLGtRaGU_mtNyTAAPVW"></div>

            <input type="submit" name="submit" value="Submit">
            <?php
            echo "<p class='sign-in-account'>Already have an account? <a href='sign-in.php'>Sign in</a></p> "
            ?>

        </form>
    </div>
    <div class="error">
        <?php
        if (isset($_SESSION['error_message'])) {
            echo $_SESSION['error_message'];
            unset($_SESSION['error_message']);
        }
        ?>
    </div>
    <div class="success">
        <?php
        if (isset($_SESSION['success_message'])) {
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']);
        }
        ?>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>