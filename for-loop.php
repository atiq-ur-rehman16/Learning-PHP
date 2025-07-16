<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for loop</title>
</head>

<body>
    <?php

    //for loop ka use repeated tasks karne ke liye hota hai — jab humein kisi code ko bar bar (loop) chalana ho with a fixed number of times, tab hum for loop use karte hain.

    // for ($start = 0; $start <= 10; $start++) {
    //     echo "code step by step<br> ";
    // }

    // $table = 20;
    // for ($start = 1; $start <= 10; $start++) {
    //     echo $table * $start;
    //     echo "<br>";
    // }

    // for ($i = 0; $i < 10; $i++) {
    //     echo "current value of i is: $i <br>";
    // }

    // $students = array("Ali", "Ahmed", "Sara", "Zain", "Fatima", "Usman", "Hina", "Bilal", "Ayesha", "Hamza");
    // for ($i = 0; $i < count($students); $i++) {
    //     echo "Student " . ($i + 1) . ": " . $students[$i] . "<br>";
    // }
    // for ($i = 1; $i <= 20; $i++) {
    //     if ($i % 2 == 0) {
    //         echo "Even number: $i <br>";
    //     } else {
    //         echo "Odd number: $i <br>";
    //     }
    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // for ($j = 1; $j <= 50; $j += 2) {

    //     echo "Odd number : $j <br>";
    // }

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";


    // for ($a = 1; $a <= 10; $a++) {
    //     echo "5 x $a = " . (5 * $a) . "<br>";
    // }
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";

    // $num = 10;
    // for ($b = 1; $b <= 10; $b++) {
    //     echo " $num x $b = " . ($num * $b) . "<br>";
    // }

    // $sum = 0;
    // for ($i = 1; $i <= 10; $i++) {
    //     if ($i % 2 == 0) {
    //         $sum += $i;
    //     }
    // }
    // echo "Sum of even numbers from 1 to 10 is: $sum <br>";

    // for ($i = 10; $i >= 1; $i--) {
    //     echo "Countdown: $i <br>";
    // }
    // for ($i = 1; $i <= 5; $i++) {
    //     echo str_repeat("*", $i) . "<br>";
    // }

    // for ($i = 5; $i >= 1; $i--) {
    //     echo str_repeat("*",  $i) . "<br>";
    // }

    // for ($i = 1; $i <= 5; $i++) {
    //     echo str_repeat("&nbsp;", 5 - $i);
    //     echo str_repeat("*", $i);
    //     echo "<br>";
    // }

    // for ($i = 1; $i <= 5; $i++) {
    //     echo str_repeat("&nbsp;", 5 - $i);
    //     echo str_repeat("*", $i * 2 - 1);
    //     echo "<br>";
    // }

    for ($i = 1; $i <= 5; $i++) {
        echo str_repeat("&nbsp;", 5 - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        for ($k = $i - 1; $k >= 1; $k--) {
            echo $k;
        }
        echo "<br>";
    }
    ?>
</body>

</html>