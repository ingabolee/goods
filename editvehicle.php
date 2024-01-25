<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

$Vehicle_id = $_GET["id"];
$sql = "SELECT * FROM vehicle WHERE Vehicle_id = '$Vehicle_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $Vehicle_reg_no = $_POST['Vehicle_reg_no'];
    $Vehicle_color = $_POST['Vehicle_color'];
    $Vehicle_Capacity = $_POST['Vehicle_Capacity'];

    $sql = "UPDATE vehicle SET Vehicle_reg_no='$Vehicle_reg_no', Vehicle_color='$Vehicle_color', Vehicle_Capacity='$Vehicle_Capacity' WHERE Vehicle_id='$Vehicle_id'";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("vehicle.php")</script>';
    }
}

?>


<?php startblock('student') ?>
   

<form method="POST" action="">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Edit Vehicle</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Registration Number" type="text" name="Vehicle_reg_no" value="<?php echo $row['Vehicle_reg_no'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Color" type="text" name="Vehicle_color" value="<?php echo $row['Vehicle_color'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Capacity" type="text" name="Vehicle_Capacity" value="<?php echo $row['Vehicle_Capacity'];?>">
                        </div>
                    </div>
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-warning btn-round">Edit Vehicle</button>
                        <a href="vehicle.php" class="btn btn-default btn-round btn-primary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>