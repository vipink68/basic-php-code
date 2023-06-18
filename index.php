<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php page</title>
</head>
<body>
    <h1>This each will navigate to a new page</h1>
    <ul>
        <li><a href="array.php">Simple array and printout</a></li>
        <li><a href="forloop.php">Simple for loop</a></li>
        <li><a href="while-dowhile-loop.php">Simple while and do while loop</a></li>
        <li><a href="ifstatement.php">Simple if statement</a></li>
        <li><a href="switchstatement.php">Simple switch statement</a></li>
        <li><a href="stringmanipulation.php">Simple String manipulation</a></li>
        <li><a href="datetimemanip.php">Date and Time Manipulation</a></li>
        <li><a href="functions.php">Date and Time Manipulation</a></li>

    </ul>
    <h1>Hello human</h1>
    <?php 
        echo'<p>This is paragraph 1</p>';
        echo'<br>';
        echo'<p>This is paragraph 2</p>';
        $name = "Vipin";
        echo '<h1>My name is '.$name.'</h>';
        echo"<br>";
        echo "Hello $name welcome back in the game."
    ?>
</body>
</html>