<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: login_form.php");
    exit();
}

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Clear session and cookies
    session_unset();
    session_destroy();
    setcookie('username', '', time() - 3600);
    header("Location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      body {
         margin: 0;
         padding: 0;
      }

      /* Style for the container */
      .container {
         margin: 0;
         padding: 0;
         background-image: url('./assets/images/bg.jpg');
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center center;
         height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
         text-align: center;
         color: white; /* Updated text color to white */
      }

      /* Style for the content */
      .content {
         padding: 50px;
         background-color: rgba(242, 242, 242, 0.3);
         border-radius: 5px;
      }

      /* Style for the buttons */
      .btn {
         display: inline-block;
         padding: 10px 20px;
         background-color: #007bff;
         color: #fff;
         border-radius: 5px;
         text-decoration: none;
         margin-right: 10px;
      }

      .btn:hover {
         background-color: #0056b3;
      }

      .view-button {
         display: inline-block;
         padding: 10px 20px;
         background-color: #3498db;
         color: #fff;
         text-decoration: none;
         border-radius: 5px;
         font-size: 16px;
      }

      .view-button:hover {
         background-color: #2980b9;
      }

   </style>
</head>
<body>
<div class="container">
   <div class="content">
      <h3>HELLO, <span>USER!</span></h3>
      <h1>Welcome <span> to the  User World</span></h1>
      <p>You can upload pictures for databasing access!</p>
      <form action="upload.php" method="post" enctype="multipart/form-data">
         <input type="file" name="my_image" id="image">
         <input type="submit" value="Upload Image" name="submit">
      </form>
      <a href="view.php" class="view-button">View Uploaded Images</a>
      <a href="index.php" class="btn">Go to My Portfolio</a>
      <a href="logout.php" class="btn">logout</a>

   </div>
</div>

</body>
</html>
