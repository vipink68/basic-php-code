<?php 
$title = "Array and Printout";
include  'include/hedder.php'; ?>
    <h1><?php echo $title;?></h1>
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
    <?php include'include/footer.php';?>
    </div>
</body>
</html>