<?php
require("config.php");
require("db.php");


//check for submit
if(isset($_POST['submit'])){
//    get form data
    $title= mysqli_real_escape_string($conn,$_POST["title"]);
    $author= mysqli_real_escape_string($conn,$_POST["author"]);
    $body= mysqli_real_escape_string($conn,$_POST["body"]);

    $query ="INSERT INTO posts(title,author,body) VALUES('$title','$author','$body')";
if(mysqli_query($conn,$query)){
    header('Location:'.ROOT_URL.'');
} else{
    echo "ERROR:".mysqli_error($conn);
    }
}


?>
<?php include('inc/header.php')?>


    <div class="container">
        <h1 class="text-center m-3">Add Post</h1>

        <form action="addPost.php" method="post">
         <div class="form-group">
             <input type="text" placeholder="Tilte" value="" name="title" class="form-control">
         </div>
            <div class="form-group">
                <input type="text" placeholder="Author" value="" name="author" class="form-control">
            </div>
            <div class="form-group">
              <textarea name="body" placeholder="Body" value="" class="form-control"> </textarea>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">

        </form>
    </div>
<?php include("inc/footer.php") ;?>
