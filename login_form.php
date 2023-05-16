<?php
@include 'config.php';
// Start session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_name'])) {
  header("Location: user_page.php");
  exit();
} elseif (isset($_SESSION['admin_name'])) {
  header("Location: admin_page.php");
  exit();
}

// Check if the login form is submitted
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  // Connect to the database
  $servername = "localhost";
  $db_username = "root";
  $db_password = "";
  $dbname = "contactform";
  $conn = new mysqli($servername, $db_username, $db_password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Query the user table for the entered email and password
  $sql = "SELECT * FROM user_form WHERE email='$email' AND password='$pass'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // User is authenticated, set the session and redirect to appropriate page
    $row = mysqli_fetch_array($result);
    if ($row['user_type'] == 'admin') {
      $_SESSION['admin_name'] = $row['name'];
      header('location: admin_page.php');
      exit();
    } elseif ($row['user_type'] == 'user') {
      $_SESSION['user_name'] = $row['name'];
      header('location: user_page.php');
      exit();
    }
  } else {
    // Invalid email or password, display error message
    $error[] = 'Incorrect email or password!';
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <style>
      body {
         background-color: #f2f2f2;
         font-family: Arial, sans-serif;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      h1 {
         text-align: center;
         margin-top: 50px;
      }

      .form-container {
         max-width: 400px;
         padding: 20px;
         background-color: #fff;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0,0,0,0.2);
         background-image: url('./assets/images/login_bg.jpg'); /* Background image URL */
         background-size: cover;
         background-position: center;
         display: flex;
         flex-direction: column;
         align-items: center;
         color: white;
      }

      label {
         display: block;
         font-weight: bold;
         margin-bottom: 5px;
      }

      input[type=text], input[type=email],
      input[type=password] {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
      }

      input[type=submit] {
         background-color: #4CAF50;
         color: #fff;
         font-size: 16px;
         padding: 10px 20px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         transition: background-color 0.3s;
      }

      input[type=submit]:hover {
         background-color: #2e8b57;
      }

      .error {
         color: red;
         margin-bottom: 20px;
      }

      .form-container a {
         color: darkcyan;
      }
      h3{
         text-align: center;
      }
   </style>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>
