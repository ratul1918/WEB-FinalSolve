<?php
$students = $_POST["students"];
$slices_per_student = $_POST["slices"];
$pizza_slices = $_POST["pizza_slices"];

$pizza_price = 1050;

$total_slice_needed = $students * $slices_per_student;

$total_pizzas = ceil($total_slice_needed / $pizza_slices);

$leftover_slices = ($total_pizzas * $pizza_slices) - $total_slice_needed;

$slice_price = $pizza_price / $pizza_slices;
$wasted_money = $leftover_slices * $slice_price;

echo "Total Pizzas: " . $total_pizzas . "<br>";
echo "Leftover Slices: " . $leftover_slices . "<br>";
echo "Wasted Money: " . $wasted_money . " BDT";
?>
