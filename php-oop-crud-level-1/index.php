<?php
// core.php holds pagination variables
include_once 'config/core.php';
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
  
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
$category = new Category($db);
  
$page_title = "Read Products";
include_once "layout_header.php";
  
// query products
$stmt = $product->readAll($from_record_num, $records_per_page);
  
// specify the page where paging is used
$page_url = "index.php?";
  
// count total rows - used for pagination
$total_rows=$product->countAll();
  
// read_template.php controls how the product list will be rendered
include_once "read_template.php";
  
// layout_footer.php holds our javascript and closing html tags

?>

<?php
// include database and object files
include_once 'config/database.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// select all from history
$query = "SELECT * FROM History ORDER BY timestamp DESC";
$stmt = $db->prepare($query);
$stmt->execute();

// include page header
$page_title = "History of CRUD";
include_once "layout_header.php";

echo "<div class='right-button-margin'>
        <a class='btn btn-default pull-right'>History Action</a>
    </div>";

// display the history
echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Action</th>";
        echo "<th>Time</th>";
    echo "</tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    echo "<tr>";
        echo "<td>{$product_id}</td>";
        echo "<td>{$action}</td>";
        echo "<td>{$timestamp}</td>";
    echo "</tr>";
}

echo "</table>";

// include page footer
include_once "layout_footer.php";
?>
