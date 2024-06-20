<?php
setcookie("Auction_Item", "Luxury Car", time() +60);
if (isset($_COOKIE["Auction_Item"]))
{
    $message = "Auction Item is a " . $_COOKIE["Auction_Item"];
}
else
{
    $message = "No items for auction.";
}
?>
<!DOCTYPE html>
<html>
<body>
<?php echo $message; ?>
<p>
    <strong>Note:</strong>
    You might have to reload the page
    to see the value of the cookie.
</p>

</body>
</html>
