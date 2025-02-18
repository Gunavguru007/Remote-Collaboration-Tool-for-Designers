<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }

        #userProfiles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .userProfile {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .userProfile:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }

        .userProfile h3 {
            margin-top: 0;
            color: #333;
            font-size: 1.5rem;
        }

        .userProfile p {
            margin: 10px 0;
            color: #666;
        }

        .sendMessageButton {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sendMessageButton:hover {
            background-color: #45a049;
        }

        #homeButton {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #homeButton:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>User Profiles</h1>
    <div id="userProfiles">
        <?php
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "my_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch user profiles from the database
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if (!$result) {
            die("Error executing query: " . mysqli_error($conn));
        }

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='userProfile'>";
                echo "<h3>" . $row["full_name"] . "</h3>";
                echo "<p>Email: " . $row["email"] . "</p>";
                echo "<p>User ID: " . $row["user_id"] . "</p>";
                // Add a button to send message
                echo "<button class='sendMessageButton' data-userid='" . $row["user_id"] . "'>Send Message</button>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
    <button id="homeButton">Home</button>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var sendMessageButtons = document.querySelectorAll('.sendMessageButton');
            sendMessageButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var userId = button.getAttribute('data-userid');
                    var message = prompt("Enter your message:");
                    if (message) {
                        // Send message to the server
                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "php/sendMessage.php", true);
                        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                alert(xhr.responseText);
                            }
                        };
                        xhr.send("sender_id=<?php echo $loggedInUserId; ?>&receiver_id=" + userId + "&message=" + encodeURIComponent(message));
                    }
                });
            });

            // Event listener for the home button
            document.getElementById("homeButton").addEventListener("click", function() {
                window.location.href = "afterlogin.php";
            });
        });
    </script>
</body>
</html>
