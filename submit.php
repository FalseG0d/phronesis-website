<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO litum (first, last, email,contact,institue,sex) VALUES (?, ?, ?,?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email,$contact,$institute,$sex);

// set parameters and execute
$firstname = $_POST["fname"];
$lastname =$_POST["lname"];
$email = $_POST["Email"];
$contact=$_POST["Contact"];
$institute=$_POST["Institute"];
$sex=$_POST["Gender"];
$stmt->execute();

// echo "New records created successfully";

$stmt->close();
$conn->close();
?>
