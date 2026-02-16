<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strona działa</h1>
    <?php
    echo "Hello World";

    $a = 7;
    echo "Wartość a przed funkcją: .$a. <br>";
    
    function f1() {
        global $a;
        $a++;
    }
    f1();
        
        echo "Wartość a przed funkcją: .$a. <br>";
        
    ?>
</body>
</html>