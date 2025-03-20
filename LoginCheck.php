<?php
session_start(); // Start the session

// Database connection variables
$servername = "localhost";
$username = "root";
$password = "12345";  
$dbname = "fitnessTracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT name, password FROM userdata WHERE email = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($name, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $_SESSION["name"] = $name; 
            header("Location: Home.php"); 
            exit();
        } else {
            echo "<script>
                    alert('Invalid login credentials. Please try again.');
                    window.location.href = 'LoginScreen.html';
                  </script>";
        }
    } else {
        // Email not found
        echo "<script>
                alert('Invalid login credentials. Please try again.');
                window.location.href = 'LoginScreen.html';
              </script>";
    }
    $stmt->close();
}

$conn->close();
?>
