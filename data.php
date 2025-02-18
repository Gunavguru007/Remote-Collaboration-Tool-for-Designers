<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .gallery-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .home-button {
            display: block;
            width: 120px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .home-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Image Gallery</h2>
        <table id="imageTable">
            <tr>
                <th>User ID</th>
                <th>Image</th>
                <th>Description</th>
            </tr>
            <?php
            session_start();
            error_reporting(0);
            // Include database connection
            include "db_connection.php";

            // Fetch data from the database
            $sql = "SELECT  user_id, id, image, image_description FROM image_file";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["user_id"] . "</td>";
                    header("Content-type: " . $row["id"]);
                    echo "<td><img src='uploads/" . ($row["image"]) . "' class='gallery-img'></td>";
                    echo "<td>" . $row["image_description"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No images found</td></tr>";
            }

            // Close database connection
            $conn->close();
            ?>
        </table>
        <!-- Home button -->
        <a href="afterlogin.php" class="home-button">Home</a>
    </div>
    <script>
        function searchImages() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("imageTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Assuming user ID is in the first column
                if (td) {
                    if (td.textContent.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>