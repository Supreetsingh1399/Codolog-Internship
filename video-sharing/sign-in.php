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
            width: 300px;
            height: 435px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form input{
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        .sign-in-text{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="signin-form">
    <h2 class="sign-in-text">Sign In</h2>
    <form action="process-signin.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign In">
    </form>
    <?php
        echo "<p>Don't have an account? <a href='sign-up.php'>Sign up</a></p>";
    ?>
</div>
</body>
</html>