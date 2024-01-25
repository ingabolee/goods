<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$Vehicle_id = $_GET["id"];

$sql = "DELETE FROM vehicle WHERE Vehicle_id = '$Vehicle_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: vehicle.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>