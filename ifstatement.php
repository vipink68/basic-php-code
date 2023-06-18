<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-statement</title>
</head>
<body>
    <h1>If Statement</h1>
    <?php 

        $grade = 50;
        $obtainmarks = 100;
        if($obtainmarks<$grade){
            echo'<h3 style="color: red">you are fail</h3>';
            echo'<h3>You have to give the exam again.</h3>';
        }else{
            echo'<h3 style="color: green">you have passed the exam</h3>';
            if($obtainmarks>90){
                echo'<h2>Grade: O</h2>';
                echo'<h2>Remark: Exellent Outstanding performance</h2>';
            }elseif($obtainmarks<=90 && $obtainmarks>80){
                echo'<h2>Grade: A</h2>';
                echo'<h2>Remark: Greate performance.</h2>';
            }elseif($obtainmarks<=80 && $obtainmarks>70){
                echo'<h2>Grade: B+</h2>';
                echo'<h2>Remark: Greate performance.</h2>';
            }elseif($obtainmarks<=70 && $obtainmarks>60){
                echo'<h2>Grade: B</h2>';
                echo'<h2>Remark: Good performance.</h2>';
            }elseif($obtainmarks<=60 && $obtainmarks>50){
                echo'<h2>Grade: C+</h2>';
                echo'<h2>Remark: Performed well</h2>';
            }elseif($obtainmarks<=50&& $obtainmarks>44){
                echo'<h2>Grade: C</h2>';
                echo'<h2>Remark: Need improvments pass with grase.</h2>';
            }else{
                echo'<h2>Data not found</h2>';
            }
            
        }
    ?>
</body>
</html>