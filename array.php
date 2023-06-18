<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array in php</h1>
    <?php
        // a variable 
        $num = 3;
        
        // an array of same data type
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        $size = count($numbers);
        echo"<p>The size of the numbers array is : $size</p>";

        for($i=0;$i<10;$i++){
            echo"Value of array at index $i is $numbers[$i]";
            echo'<br>';
        }


    ?>
</body>
</html>