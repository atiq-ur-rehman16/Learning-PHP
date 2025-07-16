<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Go To statement</title>

</head>

<body>
    <?php
    // $x = 10;
    // echo "before condition<br>";
    // if ($x == 20) {
    //     goto label;
    // }
    // $name = "Atiq Ur Rehman <br>";
    // echo $name;

    // //
    // label:
    // echo "Statement is jumped on line no. 22";

    for ($i = 0; $i < 10; $i++) {
        echo "$i <br>";

        if ($i == 5) {
            goto end;
        }
    }


    end:
    echo "Loop ended at 5 <br>";


    ?>

</body>

</html>