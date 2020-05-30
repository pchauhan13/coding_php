<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 9</title>
</head>
<body>
    <form action="program_9.php" method="post">
        <input type="checkbox" name="fruits[]" id="fruits" value="apples"> Apples
        <input type="checkbox" name="fruits[]" id="fruits" value="oranges"> Oranges
        <input type="checkbox" name="fruits[]" id="fruits" value="mangoes"> Mangoes
        <input type="submit" value="Submit">
    </form>

    <?php
        echo $_POST["fruits"], "<br>";
        echo $_POST["fruits"][0], "<br>";
    ?>
</body>
</html>