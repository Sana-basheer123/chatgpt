<?php
include'connection.php';
$id=$_GET['updateid'];
$sql="select * from `products` where id=$id";
$result = $conn->query($sql);
if(isset($_POST['submit'])){
    $productName=$_POST['name'];
    $productPrice=$_POST['price'];
   
    $sql="update `products` set id=$id,name='$productName',price='$productPice'";
    $result=mysqli_query($con,$sql);
    $row = $result->fetch_assoc()
    $productName=$row['name'];
    $productPrice=$row['price'];
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>