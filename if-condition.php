<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP If condition</title>
</head>

<body>
    <?php
    $age = 10;


    if ($age < 18) {
        echo "Show kids content.";
    }

    echo "<br>";
    $age = 20;

    if ($age >= 18) {
        echo "You are eligible to vote.";
    }



    ?>
</body>

</html>