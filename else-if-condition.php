<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else If condition </title>
</head>

<body>
    <?php
    $country = "Pakistan";
    if ($country == "Pakistan") {
        echo "This is an asian Pakistan";
    } elseif ($country == "France") {
        echo "This is an European country France";
    } elseif ($country == "Canada") {
        echo "This is a North American country Canada";
    } else {
        echo "Unknown country";
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";
    $marks = 85;

    if ($marks >= 90) {
        echo "A+";
    } elseif ($marks >= 80) {
        echo "A";
    } elseif ($marks >= 70) {
        echo "B";
    } else {
        echo "Fail";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";


    $isRaining = true;

    if ($isRaining) {
        echo "Take an umbrella";
    } else {
        echo "No umbrella needed";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $time = 15;

    if ($time < 12) {
        echo "Good morning";
    } elseif ($time < 18) {
        echo "Good afternoon";
    } else {
        echo "Good evening";
    }
    ?>
</body>

</html>