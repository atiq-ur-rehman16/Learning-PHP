<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statement</title>
</head>

<body>
    <?php
    //Switch Statement Example
    $favoriteColor = "Blue";

    switch ($favoriteColor) {
        case "red";
            echo "Your favorite color is red.";
            break;
        case "Blue";
            echo "Your favorite color is blue.";
            break;
        case "green";
            echo "Your favorite color is green.";
            break;
        default:
            echo "Your favorite color is not red, blue, or green.";
            break;
    }

    // $name = 'Linus';
    // function myTest()
    // {
    //     $name = 'Tobias';
    // }
    // myTest();
    // echo $name;


    // $name = 'Linus';
    // function myTest()
    // {
    //     $GLOBALS['name'] = 'Tobias';
    // }
    // myTest();
    // echo $name;

    // $name = 'Linus';
    // echo '<h1>Hello <br>  $name</h1>';
    // echo   " <h1>Hello<br> $name</h1>";
    // $name = 'Linus';
    // print '<h1>Hello $name</h1>';
    // print "<h1>Hello " . $name . "</h1>";
    // $x = "Hello World!";
    // echo substr($x, -5);
    // echo abs(-6.7);
    // echo sqrt(16)
    $x = 5;
    if ($x != 5) {
        echo "Hello";
    }
    ?>
</body>

</html>