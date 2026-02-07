<?php
$attendees = $_POST["quantity"];
$capacity  = $_POST["capacity"];
$price     = $_POST["price"];

$screens = ceil($attendees / $capacity);
$empty_seats = ($screens * $capacity) - $attendees;
$wasted_money = $empty_seats * $price;

echo "Total Screens: " . $screens . "<br>";
echo "Empty Seats: " . $empty_seats . "<br>";
echo "Wasted Money: " . $wasted_money . " BDT";
?>
