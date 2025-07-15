<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If else condition</title>
</head>

<body>
    <?php
    $age = 20;
    if ($age < 18) {
        echo "Show kids content.";
    } else {
        echo "You are not a kid anymore.";
    }



    echo "<br>";
    echo "<br>";
    $name = "Atiq Ur ";
    if ($name == "Atiq Ur Rehman") {
        echo "Welcom Back, $name";
    } else {
        echo "$name name not present is our Database.";
    }

    ?>
</body>

</html>