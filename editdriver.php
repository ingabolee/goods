<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

$Driver_id = $_GET["id"];
$sql = "SELECT * FROM driver WHERE Driver_id = '$Driver_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $Driver_full_name = $_POST['Driver_full_name'];
    $Driver_mobile = $_POST['Driver_mobile'];
    $Driver_email = $_POST['Driver_email'];

    $sql = "UPDATE driver SET Driver_full_name='$Driver_full_name', Driver_mobile='$Driver_mobile', Driver_email='$Driver_email' WHERE Driver_id='$Driver_id'";

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
                        <h6 class="card-title mb-1">Edit Driver</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Full Name" type="text" name="Driver_full_name" value="<?php echo $row['Driver_full_name'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Mobile" type="text" name="Driver_mobile" value="<?php echo $row['Driver_mobile'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Email" type="text" name="Driver_email" value="<?php echo $row['Driver_email'];?>">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-warning btn-round">Edit Driver</button>
                        <a href="driver.php" class="btn btn-default btn-round btn-primary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>