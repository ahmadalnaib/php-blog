<?php

?>
<nav class="navbar  navbar-expand-md  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo ROOT_URL;?>">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo  ROOT_URL;?>addPost.php">Add Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo  ROOT_URL?>about.php">About</a>
            </li>

        </ul>
    </div>
</nav>

