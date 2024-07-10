<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }

        .about-container {
            margin: 100px auto;
            max-width: 800px;
            padding: 20px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;

            a {
                text-decoration: none;
                color: #333;
                padding: 5px 10px;
                margin: 20px 5px;
            }

            a:hover {
                color: #0077cc;
            }

            p {
                margin: 20px;
                font-size: 1.1rem;
            }

            h1 {
                text-align: center;
                margin-top: 50px;
            }
        }
    </style>
</head>

<body>

    <?php define('SKIP_BODY', true);
    require '../head/index.php' ?>
    <div class="about-container">
        <h1>About us</h1>
        <p>Welcome to our video-sharing website. We are a team of developers who are passionate about creating a platform for users to share their videos with the world. Our goal is to provide a seamless experience for both content creators and viewers. We hope you enjoy using our website!</p>
        <p>Contact us at:
            <a href="mailto:
            <?php echo htmlspecialchars('supreetsingh1399@outlook.com'); ?>">
                <?php echo htmlspecialchars('supreetsingh1399@gmail.com'); ?>
            </a>
        </p>
        <p>Follow us on social media:
            <a href="https://www.facebook.com/">
                <img src="facebook-icon.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/">
                <img src="instagram-icon.png" alt="Instagram">
            </a>
            <a href="https://www.twitter.com/">
                <img src="twitter-icon.png" alt="Twitter">
            </a>
        </p>
        <p>&copy; 2021 video-sharing. All rights reserved.</p>

        <a href="../head/index.php">Back to home</a>
    </div>
    <?php require '../footer/footer.php'; ?>
</body>

</html>