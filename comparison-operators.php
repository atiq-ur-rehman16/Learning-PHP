<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comparison Operators</title>
</head>

<body>
    <?php
    //"Comparison operators" do values ko compare karte hain — aur result hamesha true ya false (i.e., Boolean) me return karte hain.
    //Operator	Name	      Example	         Result
    // ==	Equal to	      5 == 5	         true
    // ===	Identical(value + type)	5 === "5"	false
    // !=	Not equal to	 5 != 3	            true
    // <>	Not equal to	 5 <> 5	           false
    // !==	Not identical	 5 !== "5"	       true
    // >	Greater than	 10 > 5	           true
    // <	Less than	     2 < 1	          false
    // >=	Greater or equal 5 >= 5	          true
    // <=	Less or equal	 4 <= 3     	 false

    $a = 10;
    $b = 10;
    $c = "10";
    $d = 5;

    //var_dump($a == $b); // Equal to
    //var_dump($a == $c);

    //var_dump($a === $c); // Identical (value + type)

    // var_dump($a != $d); // Not equal to


    //var_dump($a <> $b); // Not equal to

    //var_dump($a !== $c); // Not identical

    //var_dump($a > $d); // Greater than

    //var_dump($a < $b); // Less than

    //var_dump($a >= $b); // Greater or equal

    //var_dump($a <= $d); // Less or equal



    var_dump($a <=> $d); // Spaceship operator (returns 0 if equal, 1 if left is greater, -1 if right is greater)


    ?>
</body>

</html>