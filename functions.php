<?php
$title = 'Functions'; include  'include/hedder.php'; ?>
    <h1>Functions in php</h1>
    <?php 
        /* defining a functions; */

        function  printmsg(){
           echo'Functions in php';
        }
        /* calling functions */
        printmsg();

        function sum($num1, $num2){
            echo"Sum of $num1 and $num2 is: ".$num1+$num2;
        }
        echo'<br>';

        sum(4,5);
        echo'<br>';
        sum(40,50);
        echo'<br>';
        sum(400,500);
        echo'<br>';
        sum("4000","5000");
        echo'<br>';
        
        echo'<hr>';
        echo 'Passing by value: function($variable);';
        echo'<br>';
        // Function value change doesn't affect original variable
            $num = 1000;
            echo'original value: '.$num.'<br>';
        function changnum($num){
            $num+=500;
            echo 'Value of num inside function(+500): '.$num.'<br>';
        }
        changnum($num);
        echo'Value of num outside function'.$num;
            

        echo'<br>';
        echo'<hr>';

        echo 'Passing by reference: function(&$variable);';
        echo'<br>';
        $num1 = 1000;
            echo'original value: '.$num1.'<br>';
        function changnum2(&$num1){
            $num1+=500;
            echo 'Value of num inside function(+500): '.$num1.'<br>';
        }
        changnum2($num1);
        echo'Value of num outside function'.$num1

    ?>
    <?php include'include/footer.php';?>
    </div>
</body>
</html>