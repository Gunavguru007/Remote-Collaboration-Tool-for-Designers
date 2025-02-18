<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIEW AREA</title>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
    }
    nav {
      justify-content: center;
      align-items: center;
      max-width: 80vw;
      margin: auto;
      display: flex;
      z-index: 10;
    }
    nav .pagename {
      font-family: cursive;
      font-size: 34px;
      color: rgb(230, 225, 225);
      font-weight: bold;
      position: absolute;
      left: 5px;
    }
    .nav-button {
      background-color: #121412; 
      border: none;
      color: white;
      padding: 15px 32px;
      text-decoration: none;
      font-size: 19px;
      margin: 4px 3px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      width: 100%;
      background-color: #160053;
    }
    .search_bar {
      width: 90%;
      max-width: 800px;
      background-color: #fff;
      display: flex;
      padding: 2px;
      border-radius: 4px;
      margin-bottom: 20px;
      z-index: 20;
    }
    #select {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #160053;
      color: #fff;
      width: 300px;
      padding: 25px 20px;
      cursor: pointer;
      position: relative;
      border-radius: 4px;
      z-index: 30;
    }
    #select img {
      width: 20px;
    }
    #select ul {
      position: absolute;
      top: 120%;
      left: 0;
      list-style: none;
      background: #fff;
      color: #555;
      width: 100%;
      border-radius: 4px;
      max-height: 0;
      overflow: hidden;
      transition: max-height .5s;
      z-index: 40;
    }
    #select ul li {
      padding: 10px 20px;
      cursor: pointer;
    }
    .search_bar input {
      padding: 20px 25px;
      border: none;
      width: 100%;
      outline: none;
      font-size: 18px;
    }
    #select ul.open {
      max-height: 300px;
    }
    .search-button {
      padding: 15px 30px;
      border: none;
      background-color: #160053;
      color: #fff;
      cursor: pointer;
      font-size: 18px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
    .search-button:hover {
      background-color: #120040;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 20px;
    }
    .gallery-item {
      position: relative;
      margin: 10px;
      overflow: hidden;
      border-radius: 10px;
    }
    .gallery-item img {
      display: block;
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s;
    }
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    .gallery-item .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      opacity: 0;
      transition: opacity 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }
    .gallery-item:hover .overlay {
      opacity: 1;
    }
    .gallery-item .overlay h3,
    .gallery-item .overlay p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <nav>
      <div class="pagename">
        LET'S ART
      </div>
      <a href="index.php"><button class="nav-button"> HOME</button></a>
    </nav>
  </header>
  <div class="container">
    <div class="search_bar">
      <div id="select">
        <p id="selectText">All category</p>
        <img src="arrow.png">
        <ul id="list">
          <li class="options" data-category="All category">All category</li>
          <li class="options" data-category="Pencil Art">Pencil Art</li>
          <li class="options" data-category="Visual Art">Visual Art</li>
          <li class="options" data-category="Performing Art">Performing Art</li>
          <li class="options" data-category="Literary Art">Literary Art</li>
          <li class="options" data-category="Oil painting">Oil painting</li>
        </ul>
      </div>
      <input type="text" name="search" id="searchInput" placeholder="Search Type Of Image">
      <button onclick="performSearch()" class="search-button">Search</button>
    </div>
    <div class="gallery" id="gallery">
    <?php
      // Database connection
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "my_database";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve category and search term from query string
      $category = isset($_GET['Type']) ? $_GET['Type'] : 'All category';
      $search = isset($_GET['search']) ? $_GET['search'] : '';

      // Prepare SQL query
      $sql = "SELECT * FROM image_file";
      $conditions = [];

      if ($category !== 'All category') {
          $conditions[] = "Type = ?";
      }
      if ($search !== '') {
          $conditions[] = "(user_id LIKE ? OR image_description LIKE ?)";
      }

      if (count($conditions) > 0) {
          $sql .= " WHERE " . implode(" AND ", $conditions);
      }

      $sql .= " ORDER BY user_id DESC";

      // Prepare and execute statement
      $stmt = $conn->prepare($sql);
      if ($stmt === false) {
          die("Error in preparing statement: " . $conn->error);
      }

      if ($category !== 'All category' && $search !== '') {
          $likeSearch = "%$search%";
          $stmt->bind_param('sss', $category, $likeSearch, $likeSearch);
      } elseif ($category !== 'All category') {
          $stmt->bind_param('s', $category);
      } elseif ($search !== '') {
          $likeSearch = "%$search%";
          $stmt->bind_param('ss', $likeSearch, $likeSearch);
      }

      if ($stmt->execute() === false) {
          die("Error in executing statement: " . $stmt->error);
      }

      $result = $stmt->get_result();

      // Display images
      while ($row = $result->fetch_assoc()) {
          $imageData = base64_encode($row['image']);
          $artistName = htmlspecialchars($row['user_id']);
          $description = htmlspecialchars($row['image_description']);
          echo "<div class='gallery-item'>
          <img src='$imageData'alt='Art Image'>
          <div class='overlay'>
              <h3>$artistName</h3>
              <p>$description</p> 
          </div>
        </div>"
      }

      $stmt->close();
      $conn->close();
    ?>
    </div>
  </div>
  <script>
    let select = document.getElementById("select");
    let list = document.getElementById("list");
    let selectText = document.getElementById("selectText");
    let search = document.getElementById("searchInput");
    let options = document.querySelectorAll(".options");

    select.onclick = function() {
        list.classList.toggle("open");
    }

    options.forEach(option => {
        option.onclick = function() {
            selectText.innerHTML = this.innerHTML;
            search.placeholder = "Search in " + selectText.innerHTML;
            list.classList.remove("open");
        }
    });

    function performSearch() {
        const category = selectText.innerHTML;
        const searchTerm = search.value;
        const queryString = "?Type=" + encodeURIComponent(category) + "&search=" + encodeURIComponent(searchTerm);
        window.location.href = queryString;
    }
  </script>
</body>
</html>
