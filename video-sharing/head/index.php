<?php
// Start the session
session_start();
// Include the database connection file
require '../database-server/profile_details_db.php';
?>
<?php
// Initialize variables
$username = '';
$email = '';
if (isset($_FILES['profile-picture']) && $_FILES['profile-picture']['error'] == 0) {
    $profile_picture_path = 'path/to/uploads/' . $_FILES['profile-picture']['name'];
    // Move uploaded file to a specific directory
    move_uploaded_file($_FILES['profile-picture']['tmp_name'], $profile_picture_path);
    $profile_picture = '<img src="' . htmlspecialchars($profile_picture_path) . '" alt="Profile Picture">';
} else {
    // Default profile picture
    $profile_picture = '<i class="fa-solid fa-user"></i>';
}
if(isset($_SESSION['email'])) {
    // Prepare and execute the query safely to avoid SQL injection
    $stmt = $conn->prepare("SELECT username, email,profile_picture FROM profile_details WHERE email = ?");
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        // Assign user details to variables
        $username = $user['username'];
        $email = $user['email'];
        $profile_picture = $user['profile_picture'];
    } else {
        echo "User details not found.";
    }
} else {
    echo "You are not logged in.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="./index.css">
    <script src="https://kit.fontawesome.com/9168a550ec.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header-container">
        <div class="logo">
            <img class="logo-image" src="../Media/logo.png" alt="Website Logo">
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
        <!-- toggle button -->
        <div class="dropdown-container">
            <button class="dropdown-button">
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
        <div id="video-sharing-text">
            <p id="video-sharing-text">video-sharing</p>
        </div>
        <!-- profile box -->
        <button class="profile-btn"><?php echo htmlspecialchars($profile_picture)?></button>
        <div class="profile-details">
            <!-- upload image -->
            <p class="p-text">Welcome, <span id="username"><?php echo htmlspecialchars($username); ?></span></p>
            <p class="p-text">Email: <span id="email"><?php echo htmlspecialchars($email); ?></span></p>
            <button class="sign-in-btn" onclick="window.location.href='../sign/sign-in.php'">Sign In</button>
            <button class="sign-out-btn" onclick="window.location.href='../sign/sign-out.php'">Sign Out</button>
        </div>
    </div>
        <!-- Php code starts from here -->
        <?php require '../footer/footer.php'; ?>
        <!-- Php code ends here -->

        <!-- javascript linking below -->
    <script src="./index.js"></script>
</body>

</html>