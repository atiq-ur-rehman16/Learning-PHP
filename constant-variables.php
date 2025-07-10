<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant Variable</title>
</head>

<body>
    <?php
    // PHP Constants
    // Constants are like variables, but their value cannot be changed after they are defined.
    // They are defined using the define() function or the const keyword.
    // Constants are typically used to store fixed values, such as configuration settings or system-wide constants,
    // which should remain the same throughout the execution of the script.
    // define("test", 50);
    // echo test;
    // $sum = test + 30;
    // echo $sum;
    // const data = 'Atiq Ur Rehman';
    // echo data;
    define("name", "atiq ur rehman");
    echo name;
    ?>
</body>

</html>