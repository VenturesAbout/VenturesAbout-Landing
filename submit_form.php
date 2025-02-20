<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        file_put_contents('beta_signups.txt', $email . PHP_EOL, FILE_APPEND);
        echo "Thank you for signing up!";
    } else {
        echo "Invalid email address.";
    }
}
?>
