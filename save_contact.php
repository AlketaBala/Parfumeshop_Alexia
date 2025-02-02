<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';


    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "All fields are required.";
    } else {
    
        $data = "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Phone: " . $phone . "\n" .
                "Message: " . $message . "\n" .
                "----------------------------------\n";

    
        file_put_contents("contact_data.txt", $data, FILE_APPEND);

        echo "Your message has been sent successfully!";
    }
} else {
    echo "Invalid request method.";
}
?>
