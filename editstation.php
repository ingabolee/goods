<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

$Station_id = $_GET["id"];
$sql = "SELECT * FROM station WHERE Station_id = '$Station_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $Station_name = $_POST['Station_name'];
    $Station_desc = $_POST['Station_desc'];
    $Station_contact_person = $_POST['Station_contact_person'];
    $Station_mobile = $_POST['Station_mobile'];
    $Station_email = $_POST['Station_email'];

    $sql = "UPDATE station SET Station_name='$Station_name', Station_desc='$Station_desc', Station_contact_person='$Station_contact_person', Station_mobile='$Station_mobile', Station_email='$Station_email' WHERE Station_id='$Station_id'";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("station.php")</script>';
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
                        <h6 class="card-title mb-1">Edit Station</h6>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Station Name" type="text" name="Station_name" value="<?php echo $row['Station_name'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Description" type="text" name="Station_desc" value="<?php echo $row['Station_desc'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Contact Pesron" type="text" name="Station_contact_person" value="<?php echo $row['Station_contact_person'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Mobile nuber" type="number" name="Station_mobile" value="<?php echo $row['Station_mobile'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Station Email" type="text" name="Station_email" value="<?php echo $row['Station_email'];?>">
                        </div>
                    </div>
                    
                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-warning btn-round">Edit Station</button>
                        <a href="Station.php" class="btn btn-default btn-round btn-primary">Cancel</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>