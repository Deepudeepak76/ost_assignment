<?php
$conn = mysqli_connect("localhost", "root", "", "phpproject");

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];


$sql = "insert into students(id, first_name,last_name, email) values('$id','$first_name', '$last_name', '$email')";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "submitted successfully";
}
else
{
    echo "error occurred";
}
?>
