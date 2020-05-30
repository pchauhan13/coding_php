<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 7</title>
</head>
<body>
    <form action="program_7.php" method="post">
        Password: <input type="password" name="password" id="password">
        <input type="submit" value="Submit">
    </form>

    <br>

    <?php
        echo $_POST["password"];
    ?>
</body>
</html>