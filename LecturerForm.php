<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LecturerForm.css">
</head>
<body>
<form action="LecturerForm-Process.php" method="post"
      enctype="multipart/form-data">
    <label for="profile_pic">
          Your Photo
    </label> <br>
    <input type="file" name="profile_pic"  id="profile_pic" required/> <br> <br>
    <button type="submit">Upload ⬆</button>
</form>

</body>
</html>