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
require('signupAuth.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputOtp = $_POST['otp'];

    $generatedOtp = $_SESSION['otp'];

    if ($inputOtp == $generatedOtp) {
        echo "OTP verified successfully.";
        signupAuth::signup();
        header("Location: ../login.php");
        exit();
        // Proceed with further actions, such as user registration completion
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>
