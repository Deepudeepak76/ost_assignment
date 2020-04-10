<?php
$conn = mysqli_connect("localhost", "root", "", "phpproject");
$sql = "select * from students ORDER BY first_name DESC";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo 'Id : '.$row['id'];
    echo "<br/>";
    echo 'First name :'.$row['first_name'];
    echo "<br/>";
    echo 'Last name'.$row['last_name'];
    echo "<br/>";
    echo 'Email : '.$row['email'];
    echo "<br/>";
    echo "<br/>";
}
?>
