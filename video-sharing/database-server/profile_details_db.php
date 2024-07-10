<?php
// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Include the database connection
require '../database-server/db_connect.php';
$userId = mysqli_insert_id($conn);

// Secret key for reCAPTCHA
$secretKey = "6LdEH_8pAAAAAGexJqIL6SZMrPm2v8GIcoD8XyNK";
// The response from reCAPTCHA
$response = $_POST['g-recaptcha-response'] ?? '';
// The IP address of the user
$remoteIp = $_SERVER['REMOTE_ADDR'];

// Create the URL to request the validation
$verifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret=" . urlencode($secretKey) . "&response=" . urlencode($response) . "&remoteip=" . urlencode($remoteIp);

// Make the request
$response = file_get_contents($verifyUrl);
$responseKeys = json_decode($response, true);

// Check if the reCAPTCHA challenge was passed
if (isset($_POST['submit']) && !$responseKeys["success"]) {
    // Set an error message in the session
    $_SESSION['error'] = "reCAPTCHA verification failed. Please try again.";
    header('Location: ../sign/sign-up.php');
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if email and password are for login or registration
    if (isset($_POST['username'])) { // This means it's a registration attempt
        $username = $_POST['username'];
        // $profile_picture = $_FILES['profile_picture'];
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if email already exists
        $checkEmailQuery = "SELECT email FROM profile_details WHERE email = ?";
        $stmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['error_message'] = "Email already exists.";
            header('Location: ../sign/sign-up.php');
            exit();
        } else {    // Email does not exist, insert the new user
            $insertQuery = "INSERT INTO profile_details(username, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $insertQuery);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
            mysqli_stmt_execute($stmt);
            
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                // Get the last inserted ID to use as part of the file name
                $userId = mysqli_insert_id($conn);

                // SQL to create a new table for the user's videos
                $createVideosTableQuery = "CREATE TABLE `$videosTableName` (
                    `id` INT(11) NOT NULL AUTO_INCREMENT,
                    `video_title` VARCHAR(255) NOT NULL,
                    `video_url` VARCHAR(255) NOT NULL,
                    `upload_date` DATETIME NOT NULL,
                    PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

                if (mysqli_query($conn, $createVideosTableQuery)) {
                    // Table created successfully, set session variables


                    // Redirect to sign-in page
                    header('Location: ../sign/sign-in.php');
                    exit();
                } else {
                    // Handle error in table creation
                    $_SESSION['error_message'] = "Error creating video table for user.";
                    header('Location: ../sign/sign-up.php');
                    exit();
                }
            } else {
                $_SESSION['error_message'] = "Error inserting data into profile details.";
                header('Location: ../sign/sign-up.php');
                exit();
            }
        }
    } else { // This means it's a login attempt
        $checkEmailQuery = "SELECT email, password FROM profile_details WHERE email = ?";
        $stmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];

            header("Location: ../head/index.php");
            exit();
        } else {
            echo "Incorrect email or password.";
        }
    }
}
$email = 'not found'; // Default value for email
$username = 'Username: not found'; // Default value for username
// Check if email is provided via POST
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // $username = $_SESSION['username'];

    // Prepare the SQL statement
    $sql = "SELECT email, username FROM profile_details WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $email = $row['email'];
        $username = 'Welcome,' . $row['username'];
        // Success, proceed with $email and $username
    } else {
        echo "Error fetching user details.";
    }
} else {
    echo "User not logged in";
}
// Close the connection
// mysqli_close($conn);
?>
