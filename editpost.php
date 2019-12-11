<?php
require("config.php");
require("db.php");


//check for submit
if(isset($_POST['submit'])){
//    get form data
    $update_id= mysqli_real_escape_string($conn,$_POST["update_id"]);
    $title= mysqli_real_escape_string($conn,$_POST["title"]);
    $author= mysqli_real_escape_string($conn,$_POST["author"]);
    $body= mysqli_real_escape_string($conn,$_POST["body"]);

    $query ="UPDATE posts SET
          title='$title',
          author='$author',
          body='$body'
          WHERE id={$update_id} ";
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


?>
<?php include('inc/header.php')?>


<div class="container">
    <h1 class="text-center m-3">Add Post</h1>

    <form action="addPost.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Tilte" value="<?php echo $post['title']?>" name="title" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Author" value="<?php echo $post["author"]?>" name="author" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="body" placeholder="Body"  class="form-control"><?php echo $post["body"]?> </textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post["id"] ?>">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary">

    </form>
</div>
<?php include("inc/footer.php") ;?>
