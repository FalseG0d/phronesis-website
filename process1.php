<?php
/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */
function submitf(){
$servername = "";
$username = "";
$password = "";
$dbname = "";
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$contact = mysqli_real_escape_string($link, $_REQUEST['Contact']);
$institute = mysqli_real_escape_string($link, $_REQUEST['Institute']);
$sex = mysqli_real_escape_string($link, $_REQUEST['Gender']);

// Attempt insert query execution
$sql = "INSERT INTO litum(first, last, email,contact,institute,sex) VALUES ('$first_name', '$last_name', '$email', '$contact', '$institute', '$sex')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
}
?>
