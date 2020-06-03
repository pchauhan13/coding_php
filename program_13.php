<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 13</title>
</head>
<body>
    <?php
        $isMale = true;
        $isTall = false;

        if ($isMale && $isTall)
        {
            echo "You are a tall male", "<br>";
        }
        elseif ($isMale && !$isTall)
        {
            echo "You are a short male", "<br>";
        }
        else
        {
            echo "You are not a male", "<br>";
        }
    ?>
</body>
</html>