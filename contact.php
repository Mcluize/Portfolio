
<?php
            if(isset($_POST['submit'])){
              $name = mysqli_real_escape_string($con, $_POST['fullname']);
              $email =mysqli_real_escape_string($con,  $_POST['email']);
              $message =mysqli_real_escape_string($con,  $_POST['message']);

              $contact = "INSERT INTO `contact-data` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
              msqli_query($con, $contact);
            }
        ?>