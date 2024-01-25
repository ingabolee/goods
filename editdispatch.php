<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

$Dispatch_id = $_GET["id"];
$sql = "SELECT * FROM dispatch WHERE Dispatch_id = '$Dispatch_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
    $Dispatch_date = $_POST['Dispatch_date'];
    $Dispatch_time = $_POST['Dispatch_time'];
    $Dispatch_Driver_id = $_POST['Dispatch_Driver_id'];
    $Dispatch_Vehicle_id = $_POST['Dispatch_Vehicle_id'];

    $sql = "UPDATE dispatch SET 
    Dispatch_date='$Dispatch_date', 
    Dispatch_time='$Dispatch_time', 
    Dispatch_Driver_id='$Dispatch_Driver_id', 
    Dispatch_Vehicle_id='$Dispatch_Vehicle_id', 
    WHERE Dispatch_id='$Dispatch_id'";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("dispatch.php")</script>';
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
                        <h5 class="mt-4">Edit Goods dispatch</h5>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <h6 class="mt-4">Dispatch Date</h6>
                            <input class="form-control" placeholder="dispatch Name" type="date" name="Dispatch_date" value="<?php echo $row['Dispatch_date'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                        <h6 class="mt-4">Dispatch Time</h6>
                            <input class="form-control" placeholder="Description" type="time" name="Dispatch_time" value="<?php echo $row['Dispatch_time'];?>">
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM driver";

                    $rows = mysqli_query($conn, $sql);
                    ?>
                    <div class="row row-sm mg-t-20">
                        <h6 class="mt-4">Drivers</h6>
                        </br>
                        <div class="col-lg">
                        <br>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <div class="radio inlineblock m-r-25">
                                    
                                    <input type="radio" id="<?php echo $row['Driver_id']; ?>" name="Dispatch_Driver_id" value="<?php echo $row['Driver_id']; ?>">
                                    <label for="<?php echo $row['Driver_id']; ?>"><?php echo $row['Driver_full_name']; ?></label>
                                </div>
                            <?php  endwhile; ?> 
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM vehicle";

                    $rows = mysqli_query($conn, $sql);
                    ?>
                    <div class="row row-sm mg-t-20">
                        <h6 class="mt-4">Vehicles</h6><br>
                        <div class="col-lg">
                        <br>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <div class="radio inlineblock m-r-25">
                                    
                                    <input type="radio" id="<?php echo $row['Vehicle_id']; ?>" name="Dispatch_Vehicle_id" value="<?php echo $row['Vehicle_id']; ?>">
                                    <label for="<?php echo $row['Vehicle_id']; ?>"><?php echo $row['Vehicle_reg_no']; ?></label>
                                </div>
                            <?php  endwhile; ?> 
                        </div>
                    </div>                    
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Edit Dispatch</button>
                        <a href="dispatch.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>