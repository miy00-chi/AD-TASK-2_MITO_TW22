<?php
    function book($id, $title, $author, $year){
        return[
            "id" => $id,
            "title" => $title,
            "author" => $author,
            "year" => $year
        ];
    }

    function addBook(array &$catalogue, array $book){
        $catalogue[]= $book;
    }

    function printCatalogue($catalogue){
        echo "<h2>Books: </h2><ul>";
        foreach($catalogue as $book){
            echo "<li>
                ID: {$book['id']}, 
                Title: {$book['title']}, 
                Author: {$book['author']}, 
                Year: {$book['year']}
            </li>";
        }
        echo "</ul>";
    }

    function getAuthorList($catalogue){
        $authors = [];
        foreach($catalogue as $book){
            $authors[] = $book['author'];
        }
        return $authors;
    }

    function printAuthorList($authors){
        echo "<h3>Authors List: </h3><ul>";
        foreach ($authors as $author){
            echo "<li>$author</li>";
        }
        echo "</ul>";
    }


?>