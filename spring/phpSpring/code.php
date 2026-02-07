<?php
  
        $attendees = $_POST["quantity"];
        $capacity  = $_POST["capacity"];
        $price     = $_POST["price"];


        $venues = ceil($attendees / $capacity);
        $empty_seats = ($venues * $capacity) - $attendees;
        $wasted_money = $empty_seats * $price;

        echo "<h3>Calculation Results:</h3>";
        echo "Total Venues: " . $venues . "<br>";
        echo "Empty Seats: " . $empty_seats . "<br>";
        echo "Wasted Money: " . number_format($wasted_money) . " BDT<br>";

?>
