<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productName = $_POST["name"];
    $productPrice = $_POST["price"];
    $productDescription = $_POST["description"];
    
    $product_image = $_FILES['filename']['name'];
    $product_image_tmp_name = $_FILES['filename']['tmp_name'];
    $product_image_folder = 'uploaded_img/'.$product_image;
 

    
    // Validate and sanitize the data (you may want to add more validation)
    $productName = htmlspecialchars(trim($productName));
    $productPrice = floatval($productPrice);
    $productDescription = htmlspecialchars(trim($productDescription));
   
    

    

    // Insert data into the database
    $sql = "INSERT INTO products (name, price,description,image) VALUES ('$productName', $productPrice,'$productDescription',$product_image )";
    move_uploaded_file($product_image_tmp_name, $product_image_folder);

   
    if ($conn->query($sql) === TRUE) {
        header("Location:home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>
