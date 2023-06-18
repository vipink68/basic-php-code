<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While-DoWhile loop</title>
</head>
<body>
    <h1>While & Do While loop</h1>
    <?php
    $num = 1;
        // while loop
        while($num<=10)
        {
            echo"<h2>This is while loop $num</h2>";
            $num++;
        }
        echo'end of while loop';
    

    // Do-while loop
    $num = 1;
    do{
        echo"<h2>this is do while loop $num</h2>";
        $num++;
    }while($num<10);
        echo'<h2>end of do while</h2>';
        

    ?>
</body>
</html>