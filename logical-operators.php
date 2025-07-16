<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Logical Operators</title>
</head>

<body>
    <?php

    // Example of logical operators in PHP
    $a = 10;
    $b = 20;
    $c = 30;

    // Using AND operator
    //and operator (&&) checks if both conditions are true
    // if ($a == 10 && $b == 20) {
    //     echo "var a has 10 value";
    // }

    // Using OR operator
    //or operator (||) checks if at least one condition is true
    // if ($a == 10 || $b == 20) {
    //     echo "condiction is true";
    // }

    // Using NOT operator
    //not operator (!) negates the condition
    //xor operator (xor) checks if exactly one condition is true
    // if ($a == 20 xor $b == 30) {
    //     echo "xor operator is true";
    // }

    // Using NOT operator
    //not operator (!) negates the condition
    //not operator is used to check if a condition is false
    // if ($a != 11) {
    //     echo "condition is true";
    // }

    if ($a == 10 && $b == 20 and $c == 30) {
        echo "condition is true";
    }
    ?>
</body>

</html>