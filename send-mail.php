<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $subject = sanitize($_POST['subject']);
    $message = sanitize($_POST['message']);
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    // If no errors, proceed with sending email and saving to database
    if (empty($errors)) {
        // Save to database
        try {
            $stmt = $db->prepare("INSERT INTO messages (name, email, subject, message, created_at) VALUES (?, ?, ?, ?, NOW())");
            $stmt->execute([$name, $email, $subject, $message]);
            
            // Send email (this would be configured with a real mail server)
            $to = 'jacob.gitenya@example.com';
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            
            $email_body = "You have received a new message from your portfolio website.\n\n";
            $email_body .= "Name: $name\n";
            $email_body .= "Email: $email\n\n";
            $email_body .= "Message:\n$message";
            
            // In a real implementation, you would use mail() or a library like PHPMailer
            // mail($to, $subject, $email_body, $headers);
            
            // Redirect with success message
            header('Location: ../contact.php?status=success');
            exit;
        } catch(PDOException $e) {
            // Log error and redirect with error message
            error_log("Database error: " . $e->getMessage());
            header('Location: ../contact.php?status=error');
            exit;
        }
    } else {
        // Redirect with error messages
        header('Location: ../contact.php?status=error&messages=' . urlencode(implode('|', $errors)));
        exit;
    }
} else {
    // Redirect if accessed directly
    header('Location: ../contact.php');
    exit;
}
?>