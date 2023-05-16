<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: login_form.php");
    exit();
}
?>

<style>
  body {
    background-image: url('./assets/images/view_bg.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }
  form {
    display: inline-block;
  }

  button {
    background-color: Black;
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: red;
  }

  a.download-link {
    background-color: lightblue;
    padding: 6px 12px;
    color: black;
    text-decoration: none;
    font-size: 14px;
    border-radius: 4px;
    margin-bottom: 8px; /* Add margin-bottom for space */
  }
  
  a.download-link:hover {
    background-color: blue;
    color: white;
  }

  td.image-container {
    padding-bottom: 16px; /* Add padding-bottom for space */
  }
</style>

<?php
  include "db_conn.php";

  if (isset($_POST['delete'])) {
    $image_url = $_POST['image_url'];

    // Delete from Database
    $sql = "DELETE FROM images WHERE image_url='$image_url'";
    mysqli_query($conn, $sql);

    // Delete image file
    $image_path = 'uploads/' . $image_url;
    if (file_exists($image_path)) {
      unlink($image_path);
    }
  }

  $sql = "SELECT * FROM images";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<td class='image-container'>";
      echo "<img src='".$row['image_url']."' alt='".$row['image_url']."' width='200'>";
      echo "<br>";
      echo "<a href='".$row['image_url']."' download class='download-link'>Download</a>";
      echo "<br>";
      echo "<form action='' method='post'>";
      echo "<input type='hidden' name='image_url' value='".$row['image_url']."'>";
      echo "<button type='submit' name='delete'>Delete</button>";
      echo "</form>";
      echo "</td>";
      if (mysqli_num_rows($result) % 3 == 0) {
        echo "</tr><tr>";
      }
    }
    echo "</tr>";
    echo "</table>";
  } else {
    echo "No images uploaded yet.";
  }
?>

<form action="user_page.php" method="post" class="logout-button">
  <button type="submit">Go back to Admin Page</button>
</form>
