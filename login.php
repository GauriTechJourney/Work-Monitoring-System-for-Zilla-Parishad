<?php
// Start session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "setu";

    // Create connection
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data based on email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            // Password correct, set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['name'];

            // Save email and name to local storage using JavaScript
            echo "<script>";
            echo "localStorage.setItem('user_email', '" . $row['email'] . "');";
            echo "localStorage.setItem('user_name', '" . $row['name'] . "');";
            echo "window.location.href = 'index.php';";
            echo "</script>";
            exit();
        } else {
            // Password incorrect, redirect to login page with error message
            header("Location: login.html?error=password");
            exit();
        }
    } else {
        // User not found, redirect to login page with error message
        header("Location: login.html?error=email");
        exit();
    }

    $conn->close();
} else {
    // Redirect to login page if accessed directly without submitting the form
    header("Location: login.html");
    exit();
}
?>
