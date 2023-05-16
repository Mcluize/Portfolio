<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactform";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$ID = $_GET['id'];

// Delete contact
$sql = "DELETE FROM contact WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
  echo "Contact deleted successfully";
} else {
  echo "Error deleting contact: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
<br></br>
<a href="admin_page.php" style="display: inline-block; padding: 10px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 5px;">Go back to admin page</a>