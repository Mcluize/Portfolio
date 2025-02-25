<?php
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
  include "db_conn.php";

  $img_name = $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
  $error = $_FILES['my_image']['error'];

  if ($error === 0) {
    if ($img_size > 125000) {
      $em = "Sorry, your file is too large.";
      header("Location: user_page.php");
      exit();
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = ''.$new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO images (image_url) VALUES ('$new_img_name')";
        mysqli_query($conn, $sql);

        // Redirect to view.php after successful upload
        header("Location: user_page.php");
        exit();
      } else {
        $em = "You can't upload files of this type";
        header("Location: user_page.php");
        exit();
      }
    }
  } else {
    $em = "Unknown error occurred!";
    header("Location: user_page.php");
    exit();
  }
} else {
  header("Location: user_page.php");
  exit();
}
?>
