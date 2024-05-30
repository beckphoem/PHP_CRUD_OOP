<?php
// check if value was posted
if($_POST){
  
    // include database and object file
    include_once 'config/database.php';
    include_once 'objects/product.php';
  
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
  
    // prepare product object
    $product = new Product($db);
      
    // set product id to be deleted
    $product->id = $_POST['object_id'];
      
    // delete the product
    if($product->delete()){
        echo "Object was deleted.";
    }
      
    // if unable to delete the product
    else{
        echo "Unable to delete object.";
    }
}
?>

<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$product = new Product($db);

// set product id to be deleted
$product->id = $_POST['id'];

// delete the product
if($product->delete()){
    echo "Product was deleted.";

    // Insert into history
    $query = "INSERT INTO History SET product_id = :product_id, action = 'Delete', timestamp = NOW()";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':product_id', $product->id);
    $stmt->execute();
}

else{
    echo "Unable to delete product.";
}
?>
