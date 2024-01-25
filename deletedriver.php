<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$Driver_id = $_GET["id"];

$sql = "DELETE FROM driver WHERE Driver_id = '$Driver_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: driver.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>