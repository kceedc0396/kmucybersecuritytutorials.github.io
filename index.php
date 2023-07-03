<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
  $file = $_FILES["file"];

  // Check if file upload was successful
  if ($file["error"] === 0) {
    $filename = $file["name"];
    $tmp_path = $file["tmp_name"];
    $destination = "uploads/" . $filename;

    // Move the uploaded file to a permanent location
    if (move_uploaded_file($tmp_path, $destination)) {
      echo "File uploaded successfully!";
    } else {
      echo "Error uploading file.";
    }
  } else {
    echo "Error: " . $file["error"];
  }
}
?>
