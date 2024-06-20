<?php
setcookie("Books","48 Laws Of Power",time()+2*24*60*60);
if(isset($_COOKIE["Books"])){
    $message="The cookie name is ".$_COOKIE["Books"];
}  else{
    $message="The cookie name is not set";
}

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
