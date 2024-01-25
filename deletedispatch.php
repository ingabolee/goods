<?php
if ($_SESSION["login_rank"] = "1"){
    include 'config.php';
}
else {
    header("Location: notauthorised.php");
}

$dispatch_id = $_GET["id"];

$sql = "DELETE FROM dispatch WHERE Dispatch_id = '$dispatch_id'";
$result = mysqli_query($conn, $sql);

if ($result){
    header("Location: dispatch.php");
}
else{
    echo "<p>Unable to delete element.</p>";
}


?>