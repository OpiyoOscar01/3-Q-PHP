<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Request method must be POST");
}
if (empty($_FILES)) {
    exit("The file is empty.");
}
if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
    switch ($_FILES["image"]["error"]) {
        case UPLOAD_ERR_PARTIAL:
            echo "File is partially uploaded.";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "No file was uploaded.";
            break;
        case UPLOAD_ERR_EXTENSION:
            echo "File upload stopped by extension.";
        case UPLOAD_ERR_FORM_SIZE:
            echo "File is too large(max file size 5 MB).";
            break;
        default:
            echo "Unknown upload error.";
            break;
    }
}
if ($_FILES['image']['size'] > 39882163) {
    echo "File is too large.";
}
$mine_type = ['image/jpeg', 'image/png'];
if (!in_array($_FILES['image']['type'], $mine_type)) {
    echo "Invalid file type.";
}

$filename = $_FILES['image']['name'];
$directory = __DIR__ . '/uploads/' . $filename;
if (!move_uploaded_file($_FILES['image']['tmp_name'], $directory)) {
    echo "Failed to move uploaded file.";
}   else{
    echo "<p style='color: green;font-size: 20px;text-align: center;'>"."File Uploaded successfully"."<p>";
}

print_r($_FILES);
?>
