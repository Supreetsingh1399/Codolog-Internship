<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>terms</title>
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

        .points-container {
            margin-left: 50px;
            margin-right: 50px;
            box-shadow: 0px 0px 10px 0px #a80202;
            border-radius: 10px;
            background-color: white!important;
            padding: 20px;
            margin-bottom: 50px;
        }

        .points {
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.2rem;
            font-display: block;
            list-style-type:decimal;
            padding: 0px 20px 0px 60px;
           
        }

    </style>
</head>
<body>
<?php
define('SKIP_BODY', true);
require'../head/index.php'?>
    <h1>Terms and conditions:</h1>
    <div class="points-container">
        <li class="points">you are not allowed to use this website for any purpose that is illegal or prohibited by these terms and
            conditions.</li>
        <li class="points">Any attempt to gain unauthorized access to the website or its services is strictly prohibited.</li>
        <li class="points">You are not allowed to use this website in any way that could damage, disable, overburden, or impair the
            website or interfere with any other party's use and enjoyment of the website.</li>
        <li class="points">You are not allowed to obtain or attempt to obtain any materials or information through any means not
            intentionally made available or provided for through the website.</li>
        <li class="points">You are not allowed to use the website to post or transmit any material that is defamatory, offensive, or
            otherwise objectionable.</li>
        <li class="points">By using this website, you accept these terms and conditions in full. If you disagree with these terms and
            conditions or any part of these terms and conditions, you must not use this website.</li>
        <li class="points">You must be at least 18 years of age to use this website. By using this website and by agreeing to these terms.
        </li>
        <li class="points">You must not use this website in any way that causes, or may cause, damage to the website or impairment of the
            availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.</li>
        <li class="points">You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which
            consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.</li>
        <li class="points">You must not conduct any systematic or automated data collection activities (including without limitation
            scraping, data mining, data extraction and data harvesting) on or in relation to this website without the express written consent of the website owner.</li>
        </div>
    <?php require'../footer/footer.php'?>

</body>

</html>