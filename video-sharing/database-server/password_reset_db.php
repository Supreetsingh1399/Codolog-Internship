<?php
function sendPasswordResetLink($email, $db) {
    $user = $db->getUserByEmail($email);
    if ($user) {
        $token = bin2hex(random_bytes(50)); // Generate a secure token
        $expires_at = new DateTime('+1 hour'); // Token expires in 1 hour
        $db->storeToken($user['id'], $token, $expires_at);
        
        $resetLink = "https://yourwebsite.com/reset_password.php?token=$token";
        
        // Prepare email content
        $to = $email; // Send email to the user's email address
        $subject = "Password Reset Request";
        $message = "Hi there, click on this link to reset your password: $resetLink. This link will expire in 1 hour.";
        $headers = "From: noreply@yourwebsite.com\r\n";
        $headers .= "Reply-To: noreply@yourwebsite.com\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Send email
        if(mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            echo "Email sent successfully.";
        } else {
            // Failed to send email
            echo "Failed to send email.";
        }
    }
}