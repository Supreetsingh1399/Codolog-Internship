<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search-videos</title>
    <style></style>
</head>
<body>
    <?php define('SKIP_BODY', true);
    require_once '../head/index.php'; ?>

<? ob_end_flush(); ?>
    <?php include '../footer/footer.php'; ?>
</body>
</html>