<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        body{
            background-color: lightcyan;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
            text-decoration: underline;
        }

        .privacy-container {
            margin: auto;
            width: 50%;
            margin-bottom: 60px;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            box-shadow: 0px 0px 10px 0px #aaa3a3;
            color: rgb(0, 0, 0);
            /* z-index: 1; */
            display: flex;
            flex-direction: column;
            position: relative;
            font-size: 1.2rem;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 1.5px;
            li{
                list-style-type: decimal;
                margin: 10px;
                padding: 6px;

            }
            p {
            margin: 10px;
            padding: 6px;
        }
        }

        .privacy {
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php define('SKIP_BODY', true);
    require'../head/index.php'?>
    <h1>Privacy policies</h1>
    <div class="privacy-container">
        <li class="privacy">We do not store your personal information</li>
        <li class="privacy">We do not share your personal information with anyone</li>
        <li class="privacy">We do not store your search history</li>
        <li class="privacy">We do not store your watch history</li>
        <li class="privacy">We do not store your cookies</li>
        <p>We are well aware of your privacy
            and we take it very seriously.
            We do not store any of your personal information.
            We do not share your personal information with anyone.
            We do not store your search history.
            We do not store your watch history.
            We do not store your cookies.
            We are committed to providing you with the best
            user experience without compromising your privacy.
            If you have any questions or concerns, please feel free to contact us.
            We are here to help you.
        </p>
    </div>
    <?php require'../footer/footer.php'?>
</body>

</html>