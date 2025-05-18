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

        addBook($catalogue, Book(1, "Mo Dao Zu Shi", "MXTX", 2023));
        addBook($catalogue, Book(2, "Heaven Official's Blessing", "MXTX", 2023));
        addBook($catalogue, Book(3, "Scum Villain's Self-Saving System", "MXTX", 2023));

        $authors = getAuthorList($catalogue);

    ?>

    <div class="container">
        <h1>LIBRARY</h1>
    <?php
        displayBookList($catalogue);
        DisplayAuthorsList($authors);
    ?>

    </div>
</body>
</html>