<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
      include "naav.php";
    ?>
<?php


// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatgpt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and display product details
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Name</th><th>Price</th><th>Description</th><th>Image</th></tr>';

    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['price'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '<td>' . $row['image'] . '</td>';
        
       
        echo '</tr>';
    }
    

    echo '</table>';
} else {
    echo 'No products found.';
}

// Close the database connection
$conn->close();

?>
<button class="btn btn-primary"><a href="update.php?
    updateid='.$id.'"
    class="text-light">Update</a></button>

    