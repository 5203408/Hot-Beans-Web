<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get POST data
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : '';
    $date = isset($_POST['start-date']) ? strip_tags(trim($_POST['start-date'])) : '';
    $status = isset($_POST['employment-status']) ? strip_tags(trim($_POST['employment-status'])) : '';
    $address = isset($_POST['address']) ? strip_tags(trim($_POST['address'])) : '';
    $city = isset($_POST['city']) ? strip_tags(trim($_POST['city'])) : '';
    $postcode = isset($_POST['postcode']) ? strip_tags(trim($_POST['postcode'])) : '';
    $country = isset($_POST['country']) ? strip_tags(trim($_POST['country'])) : '';
    $portfolio = isset($_POST['portfolio']) ? strip_tags(trim($_POST['portfolio'])) : '';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : '';
    $CV = isset($_POST['CV']) ? strip_tags(trim($_POST['CV'])) : '';

    // Validate form fields
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    // If no errors, send email
    if (empty($errors)) {
        // Recipient email address (replace with your own)
        $recipient = "5203408@student.gloscol.ac.uk";

        // Additional headers
        $headers = "From: $name <$email>";

        // Send email
        if (mail($recipient, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        // Display errors
        echo "The form contains the following errors:<br>";
        foreach ($errors as $error) {
            echo "- $error<br>";
        }
    }
} else {
    // Not a POST request, display a 403 forbidden error
    header("HTTP/1.1 403 Forbidden");
    echo "You are not allowed to access this page.";
}
?>

