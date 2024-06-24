<?php
session_start(); // Ensure the session is started
// Display error message if set
if (isset($_SESSION['error_message'])) {
    echo '<div class="error_message">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
    unset($_SESSION['error_message']); // Clear the message after displaying
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile sign up</title>
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

        .signup-form {
            width: 350px;
            height: 500px;
            margin: 30px auto;
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

        .sign-up-text {
            text-align: center;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            text-align: center; 
        }
        .error_message {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="signup-form">
        <h2 class="sign-up-text">Sign Up</h2>
        <form action="../database-server/profile_details_db.php" method="post" enctype="multipart/form-data">
            <label for="Username">Enter Full Name:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Google reCAPTCHA widget -->
            <div class="g-recaptcha" data-sitekey="6LdEH_8pAAAAANm6y8-m4mLGtRaGU_mtNyTAAPVW"></div>

            <input type="submit" name="submit" value="Sign Up">
            <input type="reset" value="Reset">
        </form>
    </div>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']); // Clear the error message
            ?>
        </div>
    <?php endif; ?>
    <!-- Include the Google reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>