<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            text-decoration: underline;
        }

        form {
            border: 2px solid #aaa3a3;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8f8f8;
            width: 50%;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 100px;
        }

        label {
            width: 23%;
            padding: 10px;
            margin: 20px;
            display: inline-block;
        }

        input[type="text"],
        textarea {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            background-color: #dbdada;
            color: rgb(0, 0, 0);
            cursor: pointer;
        }

        input[type="text"]:focus,
        textarea:focus {
            background-color: #f8f8f8;
            box-shadow: 2px 2px 5px green;
        }

        input[type="file"] {
            width: 50%;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            background-color: #dbdada;
            color: rgb(0, 0, 0);
            cursor: pointer;
        }

        #upload {
            position: relative;
            padding: 10px;
            margin-left: 40%;
            border-radius: 5px;
            border: 1px solid #aaa3a3;
            background-color: #dbdada;
            color: rgb(0, 0, 0);
            cursor: pointer;
            box-shadow: 2px 2px 5px green;
        }
    </style>
</head>

<body>
    <?php define('SKIP_BODY', true);
    require_once '../head/index.php'; ?>
    <h1>Upload videos:</h1>
    <form action="../database-server/database-videos.php" method="post" enctype="multipart/form-data">
        <label for="video-title">Title: </label>
        <input type="text" id="video-title" name="video-title" required><br>
        <label for="video-description">Description: </label>
        <textarea name="video-description" id="video-description" cols="30" rows="10" required></textarea><br>
        <label for="video-file">Upload video: </label>
        <input type="file" id="video-file" name="video-file" required><br>
        <button type="submit" id="upload">Upload</button>
    </form>
    <?php include '../footer/footer.php'; ?>
</body>

</html>