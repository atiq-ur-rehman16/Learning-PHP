<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Increment / Decrement Operators</title>
</head>

<body>
    <?php
    // Increment and Decrement Operators
    // Increment: ++$a (pre-increment) or $a++ (post-increment)
    // Decrement: --$a (pre-decrement) or $a-- (post-decrement)


    $a = 10;
    //echo ++$a; // Pre-increment: increments $a by 1, then returns the value (11)

    //echo $a++; // Post-increment: returns the value of $a (10), then increments it by 1


    //echo --$a; // Pre-decrement: decrements $a by 1, then returns the value (10)
    echo $a--; // Post-decrement: returns the value of $a (11), then decrements it by 1

    ?>
</body>

</html>