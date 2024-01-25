<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

if(isset($_POST['submit'])){
    $Driver_full_name = $_POST['Driver_full_name'];
    $Driver_mobile = $_POST['Driver_mobile'];
    $Driver_email = $_POST['Driver_email'];

    $sql = "INSERT INTO driver (Driver_full_name, Driver_mobile, Driver_email) 
                VALUES ('$Driver_full_name', '$Driver_mobile', '$Driver_email')";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("driver.php")</script>';
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
                        <h6 class="card-title mb-1">Add Driver</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Full Name" type="text" name="Driver_full_name">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Mobile Number" type="number" name="Driver_mobile">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Email" type="text" name="Driver_email">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Add Driver</button>
                        <a href="driver.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>