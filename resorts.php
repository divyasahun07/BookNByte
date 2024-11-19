<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$servername = "localhost"; 
$username = "root"; 
// $password = "your_password"; 
$dbname = "resort"; 
// Create a connection 
$conn = new mysqli($servername, $username,'', $dbname); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 

// Retrieve form data 
$name = $_POST['name']; 
$email = $_POST['email']; 
$checkIn = $_POST['checkIn']; 
$checkOut = $_POST['checkOut']; 
$roomType = $_POST['roomType']; 
// Prepare and execute SQL query 
$sql = "INSERT INTO details (name, email, checkIn, checkOut, roomType) VALUES ('$name', 
'$email', '$checkIn', '$checkOut', '$roomType')"; 
if ($conn->query($sql) === TRUE) { 
echo "Booking successfully recorded!"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
} 
// ---------------------------------------------------------------------------------------------------------------- 
// ---------------------------------------------------------------------------------------------------------------- 
// Close the connection 
$conn->close(); 
} 
?> 
