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
// ---------------------------------------------------------------------------------------------------------------- 
$checkIn = $_POST['check_in']; 
$checkOut = $_POST['check_out']; 
$adults = $_POST['adults']; 
$childs = $_POST['childs']; 
$rooms = $_POST['rooms']; 
// Prepare and execute SQL query 
$sql = "INSERT INTO reservations (check_in, check_out, adults, childs, rooms) VALUES ('$checkIn', 
'$checkOut', '$adults', '$childs', '$rooms')"; 
 
if ($conn->query($sql) === TRUE) { 
header("Location: bill.html"); 
exit; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
} 
// ---------------------------------------------------------------------------------------------------------------- 
$name = $_POST['name']; 
$email = $_POST['email']; 
$number = $_POST['number']; 
$message = $_POST['msg']; 
// Prepare and execute SQL query 
$sql = "INSERT INTO messages (name, email, number, message) VALUES ('$name', '$email', 
'$number', '$message')"; 
if ($conn->query($sql) === TRUE) { 
echo "Message successfully sent!"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
} 
// Close the connection 
$conn->close(); 
} 
?>
