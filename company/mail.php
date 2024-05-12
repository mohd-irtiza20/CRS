<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Send Mail</title>
    <?php
     require_once('../all.php');
     require_once('../validation.php');
    ?>
<link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="title">
        <h1>Send Mail</h1>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
        <div class="form">
            <h2>Send Mail To</h2>
            <form method='post'>
                <input readonly type="text" value="<?php echo $_GET['email'] ?>" name='name' required id='to' />
                <input type="text" placeholder="Subject" name="subject">
                <textarea placeholder="Write Message" name='body' required></textarea>
                <input type='submit' name='sendmail' value="Send">
            </form>
        </div>
    </div>
</body>
</html>

<?php
require_once('../db.php');

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Check if 'email' parameter is set
if (isset($_GET['email'])) {
    $to = sanitizeInput($_GET['email']); // Sanitize the input
} else {
    // Handle the case where 'email' parameter is not set
    // Redirect or show an error message
    die("Error: Email parameter is not set.");
}

// Check if form is submitted
if (isset($_POST['sendmail'])) {
    $subject = sanitizeInput($_POST["subject"]);
    $message = sanitizeInput($_POST["body"]);
    $headers = "From: sender@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "
            <script>
                alert('Email Sent Successfully');
                window.location.href = 'my-jobs.php';
            </script>
        ";
        exit; // Exit after redirect
    } else {
        // Email sending failed
        echo "
            <script>
                alert('Error! Failed to send email. Please try again later.');
            </script>
        ";
        error_log("Failed to send email to $to."); // Log error
    }
}
?>