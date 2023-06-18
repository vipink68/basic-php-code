<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <h1>Switch statement</h1>
    <?php 
        $grade = "k";
        switch($grade){
            case 'A': echo'<h2 style="color: green">Grate performance you got A</h2>';
            break;
            case 'B': echo'<h2 style="color: green">good performance you got B</h2>';
            break;
            case 'C': echo'<h2 style="color: yellow">Performed well you got C</h2>';
            break;
            case 'D': echo'<h2 style="color: orange">Can do better you got D</h2>';
            break;
            case 'F': echo'<h2 style="color: red">You failed in the exam you got F</h2>';
            break;
            default: echo'<h2 style="color: blue">Invalid credantials</h2>';
            break;
        }
    ?>
</body>
</html>