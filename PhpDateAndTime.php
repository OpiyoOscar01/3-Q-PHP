<?php
echo "Today's date is :";
$today = date("d-m-Y")."<br>";
echo $today;
echo "<p style='color: green;background-color: gold;display: inline-block;width: 200px;height: 20vh;'>"."The date today is:"
    .date
    ('D d M Y')."<p>";
?>


<?php
echo "Today's date in various formats:" . "\n";
echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y") . "<br>";
echo date("d.M.Y/D"). "<br>";
echo "The comprehensive date is :".date("h:i:s:A D d M Y");
?>
<?php
echo date("h:i:s") . "\n";
echo date("M,d,Y h:i:s A") . "\n";
echo date("h:i a");
?>
<?php
echo mktime(23, 21, 50, 11, 25, 2017)."<br>";
?>
<?php
// Set the default timezone to East Africa
date_default_timezone_set('Africa/Nairobi');

// Create a new DateTime object and format it
$dateTime = new DateTime();
echo $dateTime->format('Y-m-d h:i:s:A')."<br>";
?>

<?php
// Set timezone
date_default_timezone_set('UTC');

// Start date
$date1 = new DateTime("now");
// End date
$date2 = new DateTime("2024-06-30 12:00:00");

// Difference between dates
$diff = $date1->diff($date2);

// Display the result
echo $diff->format("%a days, %h hours, %i minutes, %s seconds");
?>
