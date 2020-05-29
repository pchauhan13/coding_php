<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 4</title>
</head>
<body>
    <?php
        $phrase = "prashant";
        echo $phrase, "<br>";
        echo strtolower($phrase), "<br>";
        echo strtoupper($phrase), "<br>";
        echo strlen($phrase), "<br>";
        echo $phrase[0], "<br>";
        $phrase[1] =  "B";
        echo $phrase, "<br>";
        echo  str_replace("pBa", "sra", $phrase), "<br>";
        echo substr($phrase, 2, 6), "<br>";
    ?>
</body>
</html>