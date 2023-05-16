<?php
      session_start();

      // Check if the admin is logged in
      if (!isset($_SESSION['admin_name'])) {
          // Check if the regular user is logged in
          if (!isset($_SESSION['user_name'])) {
              header("Location: login_form.php");
              exit();
          }
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
   <html>
   <head>
      <title></title>
      <style type="text/css">
         .container {
            margin: 0;
            padding: 0;
            background-image: url('./assets/images/admin_bg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100vh;
            text-align: center;
            color: black; /* Updated text color to black */
         }
         table {
            border-collapse: collapse;
            width: 100%;
         }
         th, td {
            text-align: left;
            padding: 8px;
         }
         tr{
            background-color: lightgray;
         }
         tr:nth-child(even) {
            background-color: ghostwhite;
         }
         th {
            background-color: lightsalmon;
            color: black;
         }
         .logout-button {
            background-color: black;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: flex;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
         }

         .logout-button:hover {
            background-color: red;
         }

         a.action-button {
            background-color: black;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 5px;
            cursor: pointer;
         }

         a.action-button:hover {
            background-color: blue;
         }

      </style>
   </head>
   <body>
      <div class="container">
         <form action="logout.php">
            <input type="submit" value="Logout" class="logout-button">
         </form>

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

         // Retrieve data from database
         $sql = "SELECT * FROM contact";
         $result = mysqli_query($conn, $sql);
         ?>

         <h2>Contact Table</h2>

         <table>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>
               <th>Action</th>
            </tr>
            <?php
            // Loop through data and display in table
            while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr>";
               echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['email'] . "</td>";
               echo "<td>" . $row['message'] . "</td>";
               echo "<td>";
               echo "<a href='add.php?id=" . $row['ID'] . "' class='action-button'>Add</a>";
               echo "<a href='edit.php?id=" . $row['ID'] . "' class='action-button'>Edit</a>";
               echo "<a href='delete.php?id=" . $row['ID'] . "' class='action-button' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";

               echo "</td>";
               echo "</tr>";
            }
            ?>
         </table>

         <?php mysqli_close($conn); ?>
      </div>
   </body>
   </html>
