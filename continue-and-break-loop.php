<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Continue and Break loop </title>
</head>

<body>
    <?php
    $user_need = 5;
    // for ($i = 0; $i <= 10; $i++) {
    //     echo $i;
    //     echo "<br>";
    //     if ($i == $user_need) {
    //         break;
    //     }
    // }

    for ($i = 0; $i <= 10; $i++) {
        if ($i == 3 || $i == 7) {
            continue; // Skip the rest of the loop iteration when $i is 3
        }
        echo $i;
        echo "<br>";
    }
    ?>
</body>

</html>