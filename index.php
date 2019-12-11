<?php
require("config.php");
require("db.php");

//create query for sql dataBase
$query='SELECT * FROM posts ORDER BY created_at DESC ';

//get the result
$result= mysqli_query($conn,$query);

//fetch Data
$posts=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result
mysqli_free_result($result);
//close connection

mysqli_close($conn);

?>
<?php include('inc/header.php')?>


    <?php foreach($posts as $post) : ?>
        <div class="container">
      <div class="jumbotron m-4">
          <h3 class="bg-info py-2 text-center text-light"><?php echo $post["title"];?></h3>
          <small>Created on <?php echo $post["created_at"]?> By <?php echo $post["author"]?></small>
             <p class="lead"><?php echo $post["body"] ;?></p>

          <a class="btn btn-secondary" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post["id"];?>">Read More</a>
      </div>
</div>




<?php endforeach;?>

<?php include("inc/footer.php") ?>
