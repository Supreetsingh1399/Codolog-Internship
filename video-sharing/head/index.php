<?php require_once '../database-server/profile_details_db.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="../head/index.css">
    <script src="https://kit.fontawesome.com/9168a550ec.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-container">
        <div class="logo">
            <img class="logo-image" src="../Media/logo.png" alt="Website Logo">
        </div>
        <nav class="nav-items-container">
            <ul class="nav-items">
                <li class="nav-sub-items"><a href="../head/index.php">Home</a></li>
                <li class="nav-sub-items"><a href="../search-videos/videos.php">Videos</a></li>
                <!-- <li class="nav-sub-items"><a href="#">Categories</a></li> -->
                <li class="nav-sub-items"><a href="../upload/upload.php">Upload</a></li>
                <li class="nav-sub-items"><a href="../About/about.php">About</a></li>
            </ul>
        </nav>
        <div class="dropdown-container">
            <button class="dropdown-button">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="navbar-dropdown-list">
                <ul>
                    <li><a href="../head/index.php" target="_blank">Home</a></li>
                    <li><a href="../search-videos/videos.php" target="_blank">Videos</a></li>
                    <!-- <li><a href="game.html" target="_blank">Categories</a></li> -->
                    <li><a href="../upload/upload.php" target="_blank">Upload</a></li>
                    <li><a href="../About/about.php" target="_blank">About</a></li>
                </ul>
            </div>
        </div>
        <div id="video-sharing-text">
            <p>video-sharing</p>
        </div>
        <div class="profile-box">
            <button class="profile-btn"><i class="fa-solid fa-user"></i></button>
            <div class="profile-details">
                <p class="p-text"> <span id="username">
                        <?php echo
                        htmlspecialchars($username); ?>
                    </span></p>
                <p class="p-text">Email: <span id="email">
                        <?php echo htmlspecialchars($email); ?>
                    </span></p>
                <button class="sign-in-btn" onclick="window.location.href='../sign/sign-in.php'">Sign In</button>
                <button class="sign-out-btn" onclick="window.location.href='../sign/sign-out.php'">Sign Out</button>
            </div>
        </div>
    </div>
    <?php
    // In index.php
    if (!defined('SKIP_BODY') || !SKIP_BODY) {
        require_once '../head/body.php';
        require_once '../footer/footer.php';
    }
    ?>
    <script src="../head/index.js"></script>


</body>

</html>