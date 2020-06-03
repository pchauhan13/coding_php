<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 15</title>
</head>
<body>
    <form action="program_15.php" method="post">
        What was your grade?
        <input type="text" name="grade" id="grade">
        <input type="submit" value="Submit">
    </form>

    <?php
        $grade = $_POST["grade"];
        echo $grade, "<br>";
        switch ($grade)
        {
            case "A":
                echo "You did amazing.", "<br>";
                break;
            case "B":
                echo "You did good.<br>";
                break;
            default:
                echo "Invalid Grade", "<br>";
        }
    ?>
</body>
</html>