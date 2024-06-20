<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="photos.php" method="post" enctype="multipart/form-data">
<!--    <input type="hidden" name="MAX_FILE_SIZE" VALUE="1048576">-->
    <label for="">Image File:</label>
    <input type="file" id="image" name="image"> <br>
    <label for="">Image File2:</label>
    <input type="file" id="image2" name="image2"> <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>