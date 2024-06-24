<?php
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "login";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


    if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
    } else {
        $insert = "INSERT INTO info (email, password) VALUES (?, ?)";
        
        
        $stmt = $conn->prepare($insert);
        if ($stmt) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            echo "done";
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
        
        $conn->close();
    }
} else {
    echo "Email and password should not be empty.";
}
?>
