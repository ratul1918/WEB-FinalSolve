<?php
$password = $_POST["password"];

    $length = 0;
    $upper = 0;
    $lower = 0;
    $digit = 0;
    $special = 0;

    for ($i = 0; $i < 1000; $i++) {

        if ($password[$i] == "") {
            break;
        }

        $ch = $password[$i];
        $length++;

        if ($ch >= 'A' && $ch <= 'Z') {
            $upper = 1;
        }
        else if ($ch >= 'a' && $ch <= 'z') {
            $lower = 1;
        }
        else if ($ch >= '0' && $ch <= '9') {
            $digit = 1;
        }
        else if (
            $ch == '!' || $ch == '@' || $ch == '#' ||
            $ch == '$' || $ch == '%' || $ch == '^' ||
            $ch == '&' || $ch == '*'
        ) {
            $special = 1;
        }
    }

    $score = 0;

    // Length score
    if ($length >= 6) {
        $score = ($length / 2) * 10;
    }

    if ($upper == 1) $score += 15;
    if ($lower == 1) $score += 15;
    if ($digit == 1) $score += 20;
    if ($special == 1) $score += 25;

    // Display result
    if ($score >= 100) {
        echo "Perfect Password!";
    }
    else if ($score >= 91) {
        echo "Very Strong";
    }
    else if ($score >= 71) {
        echo "Strong";
    }
    else if ($score >= 51) {
        echo "Medium";
    }
    else if ($score >= 31) {
        echo "Weak";
    }
    else {
        echo "Very Weak";
    }
?>