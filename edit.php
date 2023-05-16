<!DOCTYPE html>
<html>
<head>
	<title>Edit Contact</title>
	<style type="text/css">
		form {
			display: flex;
			flex-direction: column;
			width: 50%;
			margin: auto;
		}
		input[type=text], textarea {
			padding: 8px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
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

	if (isset($_POST['submit'])) {
	    // Update data in database
	    $ID = $_POST['ID'];
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $message = $_POST['message'];

	    $sql = "UPDATE contact SET name='$name', email='$email', message='$message' WHERE ID='$ID'";

	    if (mysqli_query($conn, $sql)) {
	        echo "Record updated successfully";
	    } else {
	        echo "Error updating record: " . mysqli_error($conn);
	    }
	} else {
	    // Retrieve data from database
	    $ID = $_GET['id'];

	    $sql = "SELECT * FROM contact WHERE ID='$ID'";

	    $result = mysqli_query($conn, $sql);

	    $row = mysqli_fetch_assoc($result);

	    mysqli_close($conn);
	}
	?>

	<h2>Edit Contact</h2>

	<form method="post">
	    <input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>">
	    <label for="name">Name:</label>
	    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">

	    <label for="email">Email:</label>
	    <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">

	    <label for="message">Message:</label>
	    <textarea type="message" name="message"><?php echo $row['message']; ?></textarea>
	    <input type="submit" name="submit" value="Update">
	</form>
<a href="admin_page.php" style="display: inline-block; padding: 10px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 5px;">Go back to admin page</a>
</body>
</html>
