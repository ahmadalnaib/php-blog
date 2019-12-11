<?php
require("config.php");
require("db.php");



//check for submit
if(isset($_POST['delete'])){
//    get form data
    $delete_id= mysqli_real_escape_string($conn,$_POST["delete_id"]);


    $query ="DELETE FROM posts WHERE id={$delete_id}";

    if(mysqli_query($conn,$query)){
        header('Location:'.ROOT_URL.'');
    } else{
        echo "ERROR:".mysqli_error($conn);
    }
}

//get id
$id= mysqli_real_escape_string($conn, $_GET["id"]);

//create query for sql dataBase
$query='SELECT * FROM posts WHERE id='.$id;

//get the result
$result= mysqli_query($conn,$query);

//fetch Data
$post=mysqli_fetch_assoc($result);

//free result
mysqli_free_result($result);
//close connection

mysqli_close($conn);

?><?php include('inc/header.php')?>



    <div class="container my-2">
        <a class="btn btn-primary my-2" href="<?php echo ROOT_URL?>">Back</a>
        <h4 class="bg-info m py-2 text-center text-light"><?php echo $post["title"];?></h4>
        <small>Created on <?php echo $post["created_at"]?> By <?php echo $post["author"]?></small>
        <p class="lead"><?php echo $post["body"] ;?></p>
        <hr>

        <form class="float-right" action="post.php" method="post">
            <input type="hidden" name="delete_id" value="<?php  echo $post["id"]?>">
            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
            
        </form>

        <a class="btn btn-primary" href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo $post["id"];?>">Edit</a>




    </div>

<?php include("inc/footer.php") ?>