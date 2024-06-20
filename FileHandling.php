<?php
$filename="oscar.txt";
$file=fopen($filename, "r");
$content=fread($file,1000);
          echo "Below is the fetched content"."<br>".$content;
fclose($file);




?>