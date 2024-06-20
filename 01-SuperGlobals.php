<?php
//Illustrating the use of $GLOBALS.
$x = 10;
$y = 5;
function multiply()
{
    return $GLOBALS['x'] * $GLOBALS['y'];
}

echo multiply() . '<br>';
//Illustrating the use of $_SERVER global variable
echo $_SERVER['PHP_SELF'];  //Returns the file directory
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
//Illustrating the use of $_REQUEST global variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    Name:<input type="text" name="firstName">
    <button type="submit">Submit</button>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($name)){
            echo "Name cannot be empty";
        } else{
            echo $name;
        }
    }
    ?>
</form>
</body>
</html>
