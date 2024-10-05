<?php
require("../load.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../PHPMailer-master/PHPMailer-master/vendor/autoload.php';
class SignupAuth{
    public static $otp;
    public function signup(){

        require("../load.php");
        
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
            $First_name = $_POST['FirstName'];
            $Last_name = $_POST['LastName'];
            $Email = $_POST['Email'];
            $Username = $_POST['Username'];
            $Phone_number = $_POST['Phone'];
            $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
            $db = $ObjDb->getConnection();
            $sql = "SELECT * FROM users";
            $result = $db->query($sql);

            $emailExists = false;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row["Email"] == $Email) {
                        $emailExists = true;
                        break;
                    }
                }
            }

            if ($emailExists) {
                echo "Email already exists in the database.";
            } else {
                // Redirect to OTP verification page
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'shawn.owiro@strathmore.edu';                     //SMTP username
                    $mail->Password   = 'xjnfdjztiiqjgujz';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('shawn.owiro@strathmore.edu', 'Mailer');
                    $mail->addAddress($Email, $First_name);     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    // Generate a 4-digit random code
                    $this->$otp = rand(1000, 9999);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'OTP';
                    $mail->Body    = 'Your verification code is</br> <h1>' . $otp . '</h1>';
                    $mail->AltBody = 'Your verification code is ' . $otp;

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

                header("Location: OTPverify.php");
                exit();
                // $ObjDb->insert($First_name, $Last_name, $Phone_number, $Email, $password);
            }
        }
    }
}



?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


