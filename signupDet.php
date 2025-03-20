<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root"; 
$password = "12345";   
$dbname = "fitnessTracker"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['emailID'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $mobileNo = $_POST['mobNo'];
    $dateOfBirth = $_POST['dob'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    $sql = "INSERT INTO userdata (name, email, password, mobileNo, dateOfBirth, gender, role) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $email, $password, $mobileNo, $dateOfBirth, $gender, $role);

    if ($stmt->execute()) {
        
        header("Location: LoginScreen.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
