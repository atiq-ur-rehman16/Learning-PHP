<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>

<body>
    <?php
    // PHP Data Types
    // PHP supports several data types, which can be categorized into four main types:
    // 1. Scalar Types: These include integers, floats (doubles), booleans, and strings.
    // 2. Compound Types: These include arrays and objects.
    // 3. Special Types: These include NULL and resources.
    // 4. Mixed Types: PHP is a loosely typed language, meaning variables can change types dynamically.
    //$integer = 42; // Integer
    //$float = 3.14; // Float
    //$boolean = true; // Boolean
    //$string = "Hello, PHP!"; // String
    //$array = array(1, 2, 3); // Array
    //$Object = new MyClass(); // Object
    //$nullValue = null; // NULL
    //resource = fopen("file.txt", "r"); // Resource (file handle)

    // $x = "Atiq Ur Rehman"; // String
    // $x = 2500; // 
    // $x = 25.5; // Float
    // $x = true; // Boolean
    //$x = array(1, 2, 3); // Array
    //$x = null; // NULL
    // echo $x . "<br>";

    //var_dump($x); // Displays the type and value of the variable
    $arr = ["Atiq Ur Rehman", "kamran", false];
    echo var_dump($arr);

    // $user = new className();
    $connection = mysqli_connect("localhost", "username", "password", "database");
    echo var_dump($connection);
    ?>
</body>

</html>