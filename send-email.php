<?php
// Include PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if using Composer
require 'vendor/autoload.php';

// Database connection
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "pawshunger"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $subject = $conn->real_escape_string(trim($_POST['subject']));
    $message = $conn->real_escape_string(trim($_POST['message']));

    // Insert data into the database
    $sql = "INSERT INTO volunteers (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // Send email to admin
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;   
        try {
            // Server settings
            $mail->isSMTP();                                           // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Use Gmail SMTP server
            $mail->SMTPAuth   = true;                                // Enable SMTP authentication
            $mail->Username   = 'harshinimishal@gmail.com';          // SMTP username
            $mail->Password   = 'vkwy nqkg qeij ubtc';                 // Use App Password here
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
            $mail->Port       = 587;                                 // TCP port to connect to

            // Recipients
            $mail->setFrom('harshinimishal@gmail.com', 'Paws Hunger'); // Set sender's email
            $mail->addAddress($email, $name);                        // Add the user as a recipient
            $mail->addReplyTo('harshinimishal@gmail.com', 'Paws Hunger'); // Reply-to address

            // Content
            $mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message";
            $mail->AltBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

            $mail->send();

            // Send a thank you email to the user
            $thankYouMail = new PHPMailer(true);
            $thankYouMail->isSMTP(); // Initialize SMTP settings again
            $thankYouMail->Host       = 'smtp.gmail.com';  
            $thankYouMail->SMTPAuth   = true;
            $thankYouMail->Username   = 'harshinimishal@gmail.com';  
            $thankYouMail->Password   = 'vkwy nqkg qeij ubtc'; 
            $thankYouMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $thankYouMail->Port       = 587; 

            $thankYouMail->setFrom('harshinimishal@gmail.com', 'Paws Hunger');
            $thankYouMail->addAddress($email, $name);
            $thankYouMail->Subject = "Thank you for contacting Paws Hunger";
            $thankYouMail->Body    = "Dear $name,<br>Thank you for reaching out to us. We will process your request soon.";
            $thankYouMail->isHTML(true);
            $thankYouMail->send();

            // Redirect to contact.html with a success message
            header("Location: contact.html?message=success");
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
