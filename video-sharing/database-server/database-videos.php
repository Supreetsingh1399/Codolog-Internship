<?php 
require_once '../database-server/profile_details_db.php'; 

// Assuming $email is the email of the user. You need to set this variable based on your application's context.
$email = 'user@example.com'; // Placeholder email, replace with actual user email.

// Step 1: Retrieve User ID based on email
$userIDQuery = "SELECT id FROM profile_details WHERE email = ?";
$stmt = mysqli_prepare($conn, $userIDQuery);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $userId);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

if (empty($userId)) {
    $_SESSION['error_message'] = "User not found.";
    header('Location: ../upload/upload.php');
    exit();
}

// Step 2: Construct Table Name
$user_videos_id = "user_videos_" . $userId;
$videosTableQuery = "CREATE TABLE IF NOT EXISTS `$user_videos_id` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    video_title VARCHAR(100) NOT NULL,
    video_description TEXT,
    video VARCHAR(255) NOT NULL
)";
mysqli_query($conn, $videosTableQuery);
// Step 3: Insert Video Details
$insertQuery = "INSERT INTO `$user_videos_id` (video_title, video_description, video) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $insertQuery);
mysqli_stmt_bind_param($stmt, "sss", $title, $description, $video);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    $_SESSION['success_message'] = "Video uploaded successfully.";
    header('Location: ../upload/upload.php');
    exit();
} else {
    $_SESSION['error_message'] = "Error uploading video.";
    header('Location: ../upload/upload.php');
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>