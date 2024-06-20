<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("The submission protocol must be POST method");
}
if (empty($_FILES)) {
    exit("Profile Picture is required");
}
$mine_type = ['image/png', 'image/jpeg', 'image/xls', 'image/docx', 'application/pdf'];
if (!in_array($_FILES["profile_pic"]["type"], $mine_type)) {
    exit("The file type is not allowed");
}
$filename = $_FILES["profile_pic"]["name"];
$directory = __DIR__."/LecturerAlbum/".$filename;
if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $directory)) {
    echo "File successfully uploaded";
} else {
    echo "Sorry, there was an error uploading your file.";
}


