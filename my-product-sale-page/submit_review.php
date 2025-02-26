<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_reviews";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$review = $_POST['review'];

$sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>