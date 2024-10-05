<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h2>OTP Verification</h2>
    <form method="post" action="OTPverify.php">
        <label for="otp">Enter OTP:</label>
        <input type="number" id="otp" name="otp" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>

<?php
require("../load.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer-master/PHPMailer-master/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputOtp = $_POST['otp'];
    session_start();
    $generatedOtp = $_SESSION['otp'];

    if ($inputOtp == $generatedOtp) {
        echo "OTP verified successfully.";
        // Proceed with further actions, such as user registration completion
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>
