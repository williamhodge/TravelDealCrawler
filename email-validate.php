
<?php

function isValidEmail($email) {
    // Define the regular expression for a valid email address
    $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    // Use preg_match to test the pattern against the email
    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}

// Test the function with a sample email address
$email = "test@example.com";
if (isValidEmail($email)) {
    echo "The email address '$email' is valid.";
} else {
    echo "The email address '$email' is invalid.";
}

?>
