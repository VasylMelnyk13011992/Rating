<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=rating', 'root', '');



require 'insert.php';

    
?>

<html>
    <head>
    </head>
    <body>
    
        <form action="" method="post">

            <p>
                <label for="user">Name :</label>
                <input type="text" id="user" name="username">
            </p>

            <p>
                <label for="email">E-mail :</label>
                <input type="text" id="email" name="email">
            </p>

            <p>
                <label for="comment">Comment :</label>
                <textarea name="comment" id="comment"></textarea>
            </p>

            <p>
                <label for="qt_1">1</label>
                <input type="radio" name="rating" value="1" id="qt_1">

                <label for="qt_2">2</label>
                <input type="radio" name="rating" value="2"  id="qt_2">
                <label for="qt_3">3</label>
                <input type="radio" name="rating" value="3"  id="qt_3">
                <label for="qt_4">4</label>
                <input type="radio" name="rating" value="4"  id="qt_4">
                <label for="qt_5">5</label>
                <input type="radio" name="rating" value="5" id="qt_5">
            </p>
            <button type="submit">Send</button>
        </form>

            <?php
            
            require 'read.php';
            
            ?>
    </body>
</html>
