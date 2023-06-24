<?php 
$title = 'While and Do while loops';
include  'include/hedder.php'; ?>
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
<?php include'include/footer.php';?>
</div>
</body>
</html>