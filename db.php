
<?php
// create connection
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//  check the database work
if(mysqli_connect_errno()){
    echo "Failed to connect to Mysql".mysqli_connect_error();
}
