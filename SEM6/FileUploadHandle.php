<?php
$uploadOk = isset($_FILES['doc']);
// if($uploadOk){
    $target_path = "I:\\Apps\\xampp\\htdocs\\PHP\\SEM6\\Uploads\\";
    $target_file = $target_path . basename($_FILES['doc']['name']);


// Check for errors during file upload
if ($_FILES['doc']['error'] !== UPLOAD_ERR_OK) {
    echo "Error during file upload. Code: " . $_FILES['doc']['error'];
    $uploadOk = false;
}

// Check file size (for example, limit to 5MB)
if ($_FILES['doc']['size'] > 5 * 1024 * 1024) {
    echo "File is too large. Maximum allowed size is 5MB.";
    $uploadOk = false;
}

// Check file type (you may want to enhance this check)
$allowedExtensions = ['pdf', 'doc', 'docx'];
$fileExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!in_array($fileExtension, $allowedExtensions)) {
    echo "Invalid file type. Allowed types are: " . implode(', ', $allowedExtensions);
    $uploadOk = false;
}

// Move the uploaded file to the destination directory
if ($uploadOk) {
    if (move_uploaded_file($_FILES['doc']['tmp_name'], $target_file)) {
        echo "<h3>File uploaded successfully.</h3>";
    } else {
        echo "Error moving the file to the destination directory.";
    }
}
// }
?>
