<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            background-color: lightcyan;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
            text-decoration: underline;
        }

        .help-faq {
            p {
                margin: 10px;
                padding: 6px;

            }

            margin: 100px auto;
            width: 50%;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            box-shadow: 0px 0px 10px 0px #aaa3a3;
            color: rgb(0, 0, 0);
            z-index: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            font-size: 1.2rem;
            font-family: 'Times New Roman',
            Times,
            serif;
            letter-spacing: 1.5px;
        }

        details {
            margin: 10px;
            padding: 6px;
        }

        summary {
            margin: 10px;
            padding: 6px;
        }
    </style>
</head>

<body>
    <?php define('SKIP_BODY', true);
    require '../head/index.php' ?>

    <h1>Help/FAQ</h1>
    <div class="help-faq">
        <details>
            <summary>How to upload a video?</summary>
            <p>Click on the upload button on the top right corner of the page. Select the video you want to upload and click on the upload button.</p>

        </details>
        <details>
            <summary>How to search for a video?</summary>
            <p>Click on the search bar on the top right corner of the page. Enter the name of the video you want to search for and press enter.</p>
        </details>
        <details>
            <summary>How to create an account?</summary>
            <p>Click on the profile button on the top right corner of the page. click on the sign-up button. Enter your email and password</p>
        </details>
        <details>
            <summary>How to sign in?</summary>
            <p>Click on the profile button on the top right corner of the page. Enter your email and password and click on the sign-in button.</p>
        </details>
        <details>
            <summary>How to sign out?</summary>
            <p>Click on the profile button on the top right corner of the page. Click on the sign-out button.</p>
        </details>
        <details>
            <summary>How to contact us?</summary>
            <p>Click on the contact us link in the footer section of the page.</p>
        </details>
    </div>
    <?php require '../footer/footer.php' ?>
</body>

</html>