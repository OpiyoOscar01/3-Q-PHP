<?php
setcookie("Foods","Chicken",time()+2*24*60*60);
setcookie("Foods","Chicken",time()-2*24*60*60);
$message="The cookie named was deleted successfully.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> <?php
echo $message;
?></p>

</body>
</html>
