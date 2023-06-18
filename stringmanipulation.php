<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in php</title>
</head>
<body>
    <h1>String in php</h1>
    <?php 
        $phrase1="This is my program";
        $phrase2="This is also my system.";
        $name = "Vipin Kumar";
        echo '$phrase1: '.$phrase1.'<br>';
        echo '$phrase2: '.$phrase2.'<br>';
        echo '$name: '.$name.'<br>';
        echo'<hr>';
        echo 'There are two different variable sentences in these lines<br>'.$phrase1. ", this is my table and, " .$phrase2;
        echo'<br>';
        echo'<hr>';

        echo 'Upper case First charachter in sentence: '.ucfirst($phrase1);
        echo'<br>';
        echo 'Upper case words: '.ucwords($phrase1).'<br>';
        echo 'Upper case sentence: '.strtoupper($phrase1).'<br>';
        echo 'Lower case sentence: '.strtolower("THIS IS MY CAT AND SHE LIKES MILK.").'<br>';
        echo'<hr>';
        echo 'Repeat String in upper case: '.strtoupper(str_repeat("Vipin ",10)).'<br>';
        echo 'Repeat String in lower case: '.str_repeat("Vipin ",10).'<br>';
        echo 'Get a substring: '.substr($phrase1, 4, 11).'<br>';
        echo'<hr>';
        //Find the charachter in the string
        echo 'Find the charachter "a": '.strchr($phrase2, 'a').'<br>';
        echo 'Find the charachter "o": '.strchr($phrase2, 'o').'<br>';
        echo 'Find the charachter "y": '.strchr($phrase2, 'y').'<br>';
        echo 'Find the charachter "T": '.strchr($phrase2, 'T').'<br>';
        echo 'Find the length of variable $name : length = '.strlen($name).'<br>';
        echo 'Without Trim: '.'A'.' B C D '.'E'.'<br>';
        echo 'Trim spaces on both side: '."A".trim(" B C D ")."E".'<br>';
        echo 'Trim spaces on right side: '."A".rtrim(" B C D ")."E".'<br>';
        echo 'Trim spaces on left side: '."A".ltrim(" B C D ")."E".'<br>';

        echo 'Replace string with another: '.str_replace("system","Laptop",$phrase2).'<br>';
    ?>  
</body>
</html>