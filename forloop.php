<?php $title = 'For loop';
include  'include/hedder.php'; ?>
    <h1>For loops</h1>
    <?php 
        //for loop
            for($i=0;$i<10;$i++){
                echo($i+1);
                echo'<br>';
            }
            for($i=0;$i<10;$i++){
                echo"this is line $i";
                echo'<br>';
            }
    ?>
    <?php include'include/footer.php';?></html>
    </div>
</body>