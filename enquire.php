<?php
// Start session to store messages
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $name = trim(htmlspecialchars($_POST['contact-name'] ?? '', ENT_QUOTES, 'UTF-8'));
    $email = trim(htmlspecialchars($_POST['contact-email'] ?? '', ENT_QUOTES, 'UTF-8'));
    $phone = trim(htmlspecialchars($_POST['contact-phone'] ?? '', ENT_QUOTES, 'UTF-8'));
    $service = trim(htmlspecialchars($_POST['contact-service'] ?? '', ENT_QUOTES, 'UTF-8'));
    $message = trim(htmlspecialchars($_POST['contact-message'] ?? '', ENT_QUOTES, 'UTF-8'));
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['error'] = "Please fill in all required fields.";
        header("Location: contact.php");
        exit();
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email address.";
        header("Location: contact.php");
        exit();
    }
    
    // Validate phone number (basic validation)
    if (!preg_match("/^[0-9+\-\s\(\)]{10,15}$/", $phone)) {
        $_SESSION['error'] = "Please enter a valid phone number.";
        header("Location: contact.php");
        exit();
    }
    
    // Validate name (only letters, spaces, and common punctuation)
    if (!preg_match("/^[a-zA-Z\s\.\-']{2,50}$/", $name)) {
        $_SESSION['error'] = "Please enter a valid name (only letters, spaces, and common punctuation allowed).";
        header("Location: contact.php");
        exit();
    }
    
    // Prepare email content
    $to = "info@evidenthomebuilders.in";
    $subject = "New Contact Form Submission - Evident Home Builders";
    
    $emailBody = "New contact form submission received:\n\n";
    $emailBody .= "Name: " . $name . "\n";
    $emailBody .= "Email: " . $email . "\n";
    $emailBody .= "Phone: " . $phone . "\n";
    $emailBody .= "Service: " . ($service ?: 'Not specified') . "\n";
    $emailBody .= "Message: " . $message . "\n\n";
    $emailBody .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $emailBody .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    // Email headers
    $headers = "From: noreply@evidenthomebuilders.in\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        $_SESSION['success'] = "Thank you! Your message has been sent successfully. We'll get back to you soon.";
        
        // Log successful submission
        error_log("Contact form submitted successfully from: " . $email . " - " . date('Y-m-d H:i:s'));
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again later.";
        
        // Log error
        error_log("Contact form email failed to send from: " . $email . " - " . date('Y-m-d H:i:s'));
    }
    
    // Redirect back to contact page
    header("Location: contact.php");
    exit();
} else {
    // If accessed directly without POST data, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>
