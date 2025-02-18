<?php
// Database connection
$servername = "localhost"; // Update with your MySQL server hostname
$username = "your_username"; // Update with your MySQL username
$password = "your_password"; // Update with your MySQL password
$database = "my_database"; // Update with the name of your MySQL database

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Signup process
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];
    $retype_password = $_POST["retype_password"];

    // Check if any field is empty
    if (empty($full_name) || empty($email) || empty($user_id) || empty($password) || empty($retype_password)) {
        echo "Please fill in all fields.";
    } else {
        // Check if passwords match
        if ($password != $retype_password) {
            echo "Passwords do not match!";
        } else {
            // Check if email already exists
            $check_query = "SELECT * FROM users WHERE email='$email'";
            $result = $conn->query($check_query);
            if ($result->num_rows > 0) {
                echo "Email already exists!";
            } else {
                // Insert user data into database
                $insert_query = "INSERT INTO users (full_name, email, user_id, password) VALUES ('$full_name', '$email', '$user_id', '$password')";
                if ($conn->query($insert_query) === TRUE) {
                    echo "Signup successful!";
                } else {
                    echo "Error: " . $insert_query . "<br>" . $conn->error;
                }
            }
        }
    }
}

// Login process
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $user_id = $_POST["user_id"];
    $password = $_POST["password"];

    // Check if user exists
    $login_query = "SELECT * FROM users WHERE email='$email' AND user_id='$user_id' AND password='$password'";
    $result = $conn->query($login_query);
    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location: afterlogin.php");
    } else {
        echo "Invalid email, user ID, or password!";
    }
}

$conn->close();
?>
