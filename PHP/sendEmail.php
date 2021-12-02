<?php
// Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcTxkIdAAAAAKJnJ3YN32hRoiw9IOxGRyxJpKBT';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {

        $to = "murraydalton1@comcast.net";
        $from = $_POST['email'];

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        $subject = "From United States Landmarks";

        $headers = "From:" . $from;

        $message = $_POST['message'];

        $subject2 = "Copy of your inquiry with United States Landmarks";
        $headers2 = "From:" . $to;

        mail($to,$subject,$message,$headers);

        mail($from,$subject2,$message,$headers2);

        session_start();
        $_SESSION['successful'] = "Contact form saved successfully.<br>*Disclaimer: Emails are not actually being sent, however, all PHP is being processed.";
        header("Location: ../contact.php");
        exit();
    }

    else {
        echo '<script>alert("Captcha failed. Please refresh and try again.")</script>';
    }
}
?>