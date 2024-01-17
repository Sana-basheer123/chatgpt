
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
      include "nav.php";
    ?>
    <h1>Add Product</h1>
    <form action="add_product.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="price">Product Price:</label>
        <input type="number" name="price" step="0.01" required>
        <br>
        <label for="description">Product description:</label>
        <input type="text" name="description"  required>
        <br>
        <label for="image">Product image:</label>
        <input type="file" id="myFile" name="filename">
        <br>
        
        
        <input type="submit" value="Add Product">
    </form>



</body>
</html>
