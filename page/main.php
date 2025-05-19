<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY</title>
    <link rel="stylesheet" href="\page\assets\css\style.css">
</head>
<body>

    <?php
        require_once('C:/xampp/htdocs/AD-TASK-2_MITO_TW22/utils/Book.utils.php');
        require_once('C:/xampp/htdocs/AD-TASK-2_MITO_TW22/components/BookList.component.php');

        $catalogue = [];

        addBook($catalogue, Book(1, "Fourth Wing", "Rebecca Yorres", 2023));
        addBook($catalogue, Book(2, "Iron Flame", "Rebecca Yorres", 2023));
        addBook($catalogue, Book(3, "Onyx Storm", "Rebecca Yorres", 2025));
        addBook($catalogue, Book(4, "God of Fury", "Rina Kent", 2023));
        addBook($catalogue, Book(5, "The Song of Achilles", "Madeline Miller", 2012));
        addBook($catalogue, Book(6, "Reapers: The First Familiar", "Tsubame", 2018));
        addBook($catalogue, Book(7, "Reapers: Master of Souls", "Tsubame", 2020));

        $authors = [];
        foreach ($catalogue as $book){
            $author = $book["author"];
            if(!in_array($author,$authors)){
                $authors[] = $author;
            }
        }

    ?>

    <div class="container">
        <h1>LIBRARY</h1>
    <?php
        displayBookList($catalogue);
        echo '<hr id="one" data-symbol="☂☂☂">';
        DisplayAuthorsList($authors);
    ?>

    <a href="../index.php">Home</a>

    </div>
</body>
</html>