<?php


$con = mysqli_connect('localhost','root');

if ($con) {
    echo "connection successful";
}else
{
    echo"no connection";
}

mysqli_select_db($con,'loginsystem');


$user = $_POST['user'];
$email = $_POST['Email'];
$comment = $_POST['comment'];

$query = "insert into feedback (user, email, comment) 
values ('$user','$email','$comment') ";

echo "$query";
mysqli_query($con, $query);

header('location:index.php');

?>

