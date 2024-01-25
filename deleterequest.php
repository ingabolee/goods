<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$request_id = $_GET["id"];

$sql = "DELETE FROM customer_requests WHERE request_id = '$request_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: request.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>