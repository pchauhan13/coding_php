<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 21</title>
</head>
<body>
    <?php
        class Book
        {
            var $title;
            var $author;
            var $pages;

            function __construct($Title, $Author, $Pages)
            {
                $this->title = $Title;
                $this->author = $Author;
                $this->pages = $Pages;
                echo "new book created<br>";
            }
        }

        $book = new Book("program 21", "prashant", 43243);
        // $book->title = "program 21";
        // $book->author = "prashant";
        // $book->pages = 3423;

        // echo $book;
        echo $book->author, "<br>";
    ?>
</body>
</html>