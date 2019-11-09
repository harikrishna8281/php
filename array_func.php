<?php

function showTitle($title)
{
    echo "<h3>&#9830; $title</h3>";
    echo '<hr/>';
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

$otherColors = array(
    'green',
    'blue',
    'black',
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Array functions</title>
    <style>
        body {
            background-color: indianred;
        }
    </style>
</head>

<body>
    <header>
        <h1>Array functions</h1>
    </header>
    <main>
        <?php
        showTitle('Exercise 1 (Display $colors array in alphabetical order)');
        // Exercise 1 code here
        for($i=0; $i < count($colors); $i++) {
            for($j=0; $j<count($colors)-1; $j++){
                if($colors[$j] > $colors[$j+1]) {
                    $temp = $colors[$j+1];
                    $colors[$j+1] = $colors[$j];
                    $colors[$j] = $temp;
                }
            }
        }
        for($i=0; $i < count($colors); $i++) {
            echo $colors[$i];
            echo "<br>";
        }    
        ?>
        <?php
        showTitle('Exercise 2 (Apply a formating to each elements and display them <strong>without any loop</strong>)');
        // Exercise 2 code here
        
        $upperArray = array_map('strtoupper', $colors);
        var_dump( $upperArray) ;
        ?>
        <?php
        showTitle('Exercise 3 (Add the values of $otherColors array to $colors ones and display all combined values on one line <strong>without any loop</strong>)');
        // Exercise 3 code here
        $mergeArray =  array_merge($colors, $otherColors);
        var_dump( $mergeArray) ;
        ?>
    </main>
</body>
</html>
