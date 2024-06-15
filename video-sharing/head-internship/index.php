<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/9168a550ec.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-container">
        <div class="logo">
            <img class="logo-image" src="Media/logo.png" alt="Website Logo">
        </div>
        <nav class="nav-items-container">
            <ul class="nav-items">
                <li class="nav-sub-items"><a href="#">Home</a></li>
                <li class="nav-sub-items"><a href="#">Videos</a></li>
                <li class="nav-sub-items"><a href="#">Categories</a></li>
                <li class="nav-sub-items"><a href="#">Upload</a></li>
                <li class="nav-sub-items"><a href="#">About</a></li>
            </ul>
        </nav>
        <div class="profile">
            <button class="profile-btn"><i class="fa-solid fa-user"></i></button>
            <p>Sign in</p>

        </div>
        <div class="dropdown-container">
            <button class="dropdown-button" onclick="toggleDropdown()">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="navbar-dropdown-list">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Upload</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
        <!-- Php code starts from here -->
        <?php
        ?>
        <!-- Php code ends here -->

        <!-- javascript linking below -->
        <script src="header.js"></script>
</body>

</html>