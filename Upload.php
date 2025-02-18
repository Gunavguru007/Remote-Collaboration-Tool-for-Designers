<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="file"],
        button {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Image</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" required>
            <label for="image_description">Image Description:</label>
            <input type="text" name="image_description" id="image_description" required>
            <label for="image">Select Image:</label>
            <input type="file" name="image" id="image" required>
            <button type="submit" name="submit">Upload</button>
            <a href="afterlogin.php" class="home-button">Home</a>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    // Database connection
    $servername = "localhost";
    $username = "username"; // Change this to your database username
    $password = "password"; // Change this to your database password
    $dbname = "my_database"; // Change this to your database name

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_POST["user_id"];
    $imageDescription = $_POST["image_description"];
    $imageName = $_FILES["image"]["name"];
    $imageTmpName = $_FILES["image"]["tmp_name"];

    $sql = "INSERT INTO image_file (user_id, image, image_description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $userId, $imageName, $imageDescription);
    
    $uploadDir = "uploads/";
    $uploadPath = $uploadDir . $imageName;
    if (move_uploaded_file($imageTmpName, $uploadPath)) {
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: afterlogin.php");
        exit();
    } else {
        echo "Error uploading image.";
    }
}
?>
