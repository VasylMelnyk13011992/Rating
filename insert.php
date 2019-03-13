<?php

if (empty($_POST) === false) {
    $query ='INSERT INTO comments (username, email, comment, rating) VALUES ("'. $_POST['username'] . '", "' . $_POST['email'] . '", "'. $_POST['comment'] .'","'. $_POST['rating'] .'")';

    $pdo->query($query);
  
}
