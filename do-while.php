<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Do While loop</title>
</head>

<body>
    <?php
    // $num = 0;
    // do {
    //     echo "current loop value is: $num <br>";
    //     $num++;
    // } while ($num <= 10);

    // $num = 10;
    // do {
    //     echo "current loop value is: $num <br>";
    //     $num--;
    // } while ($num >= 0);

    for ($num = 10; $num >= 0; $num--) {
        echo "current loop value is: $num <br>";
    }

    // $num = 5;

    // do {
    //     echo "Value: $num <br>";
    //     $num -= 2;
    // } while ($num > 0);
    ?>
</body>

</html>