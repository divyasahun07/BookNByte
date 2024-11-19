<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$servername = "localhost"; 
$username = "root"; 
// $password = "your_password"; 

 
    $dbname = "resort"; 
 
    // Create a connection 
    $conn = new mysqli($servername, $username, '', $dbname); 
 
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error); 
    } 
 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $date = $_POST['date']; 
    $time = $_POST['time']; 
    $partySize = $_POST['partySize']; 
    $specialRequests = $_POST['specialRequests']; 
 
    // Fix the typo here: "INSER" should be "INSERT" 
    $sql = "INSERT INTO books(name, email, phone, date, time, partySize, specialRequests)  
            VALUES ('$name', '$email', '$phone', '$date', '$time', '$partySize', '$specialRequests')"; 
 
    if ($conn->query($sql) === TRUE) { 
        echo "Registration successful"; 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
 
    $conn->close(); 
} 
?>
