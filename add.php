<!DOCTYPE html>
<html>
<head>
   <title>Add Contact</title>
   <style type="text/css">
      form {
         border: 1px solid #ccc;
         padding: 10px;
         width: 50%;
         margin: auto;
      }
      input[type="text"], textarea {
         width: 100%;
         padding: 6px 10px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }
      input[type="submit"] {
         background-color: #4CAF50;
         color: white;
         padding: 8px 16px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
      }
   </style>
</head>
<body>
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Get form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   // Insert data into database
   $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

   if (mysqli_query($conn, $sql)) {
      header("Location: admin_page.php") ;
      exit();
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}

mysqli_close($conn);
?>


   <h2>Add Contact</h2>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <input type="submit" value="Submit">
   </form>
<a href="admin_page.php" style="display: inline-block; padding: 10px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 5px;">Go back to admin
</body>
</html>

