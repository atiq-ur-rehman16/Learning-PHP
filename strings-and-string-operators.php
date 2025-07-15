<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings and String Operators</title>
</head>

<body>
    <?php
    // "Strings" PHP me text ko represent karne ke liye use hota hai.
    // Strings ko single ya double quotes me likha ja sakta hai.
    $name = "Atiq Ur Rehman";
    $age = 27;
    echo "my name is $name"; // Double quotes me variable ko directly use kiya ja sakta hai.
    echo '<br>';
    echo '<br>';
    echo 'my name is $name'; // Single quotes me variable ko directly use nahi kiya ja sakta hai, yeh sirf string ke roop me treat hota hai.
    echo '<br>';
    echo '<br>';
    echo 'my name is ' . $name; // Concatenation operator (.) ka use karke bhi string ko concatenate kiya ja sakta hai.
    echo '<br>';
    echo 'my age is ' . $age . ' and my name is ' . $name; // Multiple concatenation
    echo '<br>';
    echo '<br>';
    $str = "Hello How are you ";
    $str2 = "My name is Atiq Ur Rehman";
    //echo $str . $str2; // Concatenation of two strings
    echo '<br>';
    $str .= $str2; // Concatenation assignment operator .= ka use karke string ko append kiya ja sakta hai.
    echo $str;

    ?>
</body>

</html>