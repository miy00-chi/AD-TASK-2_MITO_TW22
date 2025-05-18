<?php
    function DisplayBookList(array $catalogue){
        echo '<div class = "book-list">';
        echo '<h2>BOOKS:</h2><br>';
        foreach($catalogue as $book){
            echo '<div class = "book">';
            echo '<h4>'.htmlspecialchars($book["title"]).'</h4>';
            echo '<p>'.htmlspecialchars($book["year"]).'</p>';
            echo '</div>';
        }
        echo '</div>';
    }

    function DisplayAuthorsList(array $authors){
        echo '<div class = "author-list">';
        echo '<h2>AUTHORS:</h2><br>';
        foreach($authors as $author){
            echo '<div class = "author">';
            echo '<h4>'.htmlspecialchars($author).'</h4>';
            echo '</div>';
        }
        echo '</div>';
    }
        
?>