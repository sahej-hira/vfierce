<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "idea_and_funding";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if form data is submitted
if (isset($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['companyName'], $_POST['website'], 
          $_POST['projectTitle'], $_POST['detailedDescription'], $_POST['fundingRequirements'], 
          $_POST['previousExperience'], $_POST['supportDescription'], $_POST['donorContribution'], 
          $_POST['paymentMethod'], $_POST['donorContact'])) {

    // Sanitize input data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $companyName = $_POST['companyName'];
    $website = $_POST['website'];
    $projectTitle = $_POST['projectTitle'];
    $detailedDescription = $_POST['detailedDescription'];
    $fundingRequirements = $_POST['fundingRequirements'];
    $previousExperience = $_POST['previousExperience'];
    $supportDescription = $_POST['supportDescription'];
    $donorContribution = $_POST['donorContribution'];
    $paymentMethod = $_POST['paymentMethod'];
    $donorContact = $_POST['donorContact'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO project_info (fullName, email, phone, companyName, website, projectTitle, detailedDescription, fundingRequirements, previousExperience, supportDescription, donorContribution, paymentMethod, donorContact) 
            VALUES ('$fullName', '$email', '$phone', '$companyName', '$website', '$projectTitle', '$detailedDescription', '$fundingRequirements', '$previousExperience', '$supportDescription', '$donorContribution', '$paymentMethod', '$donorContact')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        // Redirect user to a contact page or wherever you want after successful submission
        header("Location: funding.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form data not submitted";
}

$conn->close();
?>
