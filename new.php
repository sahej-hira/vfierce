<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "idea_and_funding";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if form data is submitted
if(isset($_POST['fullName'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO idea_info (fullName, email, subject, message) VALUES ('$fullName', '$email', '$subject', '$message')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect user to a  contact page or wherever you want after successful submission
        header("Location: contact.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form data not submitted";
}

$conn->close();
?>