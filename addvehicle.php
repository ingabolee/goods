<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

if(isset($_POST['submit'])){
    $Vehicle_reg_no = $_POST['Vehicle_reg_no'];
    $Vehicle_color = $_POST['Vehicle_color'];
    $Vehicle_Capacity = $_POST['Vehicle_Capacity'];

    $sql = "INSERT INTO vehicle (Vehicle_reg_no, Vehicle_color, Vehicle_Capacity) 
                VALUES ('$Vehicle_reg_no', '$Vehicle_color', '$Vehicle_Capacity')";

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
                        <h6 class="card-title mb-1">Add Vehicle</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Registration Number" type="text" name="Vehicle_reg_no">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Color" type="text" name="Vehicle_color">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Capacity" type="text" name="Vehicle_Capacity">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Add Vehicle</button>
                        <a href="vehicle.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>