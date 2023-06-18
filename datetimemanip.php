<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Manipulation</title>
</head>
<body>
    <h1>PHP Date & Time Manipulation</h1>
    <?php 
        $datenow = getdate();
        echo "Today's Date: ";
        echo $datenow['mday']."<br>";
        echo "Current month : ";
        echo $datenow['mon']."<br>";
        echo "Current year : ";
        echo $datenow['year']."<br>";

        echo"Today's date is: ".$datenow['mday'].'/'. $datenow['mon'].'/'.$datenow['year'].'<br>';
        print time();
        print"<br>";
        print date("d/m/y G.i:s<br>",time())."<br>";
        print 'today is: ';
        print date("j of F Y, \a\\t g.i a",time());

    ?>
</body>
</html>