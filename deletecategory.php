<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$Category_id = $_GET["id"];

$sql = "DELETE FROM categories WHERE Category_id = '$Category_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: category.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>