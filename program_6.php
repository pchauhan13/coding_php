<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 6</title>
</head>
<body>
    <form method="get" action="program_6.php">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        Num1: <input type="number" name="num1">
        Num2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <?php
        echo "Your name is ", $_GET["name"], "<br>";
        echo "Your age is ", $_GET["age"], "<br>";
        echo "Answer: ", $_GET["num1"] + $_GET["num2"], "<br>";
    ?>
</body>
</html>