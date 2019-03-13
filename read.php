<?php
$query = 'SELECT * FROM comments';
$result = $pdo->query($query);

$query ='SELECT AVG(rating) as rating from comments';
    $rating = $pdo->query($query);

 foreach ($rating as $comment){
    ?>
    <p>Total RATING: <strong><?php echo $comment['rating']?></strong></p>

 
<?php
foreach ($result as $comment) {
    ?>
    <p>
    <div>
        <span><i>Name:</i> <strong><?php echo $comment['username'] ?></strong></span>
    </div>

    <div>
        <span><i>E-mail:</i> <?php echo $comment['email'] ?></span>
    </div>
    <div>
        <span><i>Comment:</i> <?php echo $comment['comment'] ?></span>
    </div>
    <div>
        <span><i>Rating:</i> <?php echo $comment['rating'] ?></span>
    </div>
    </p> 
 
    <?php
}
}
