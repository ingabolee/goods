<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$Station_id = $_GET["id"];

$sql = "DELETE FROM station WHERE Station_id = '$Station_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: station.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>