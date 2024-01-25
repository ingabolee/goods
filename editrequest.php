<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

$request_id = $_GET["id"];
$sql = "SELECT * FROM customer_requests WHERE request_id = '$request_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $request_ref = $_POST['request_ref'];
    $request_customer_full_name = $_POST['request_customer_full_name'];
    $request_mobile = $_POST['request_mobile'];
    $request_email = $_POST['request_email'];
    $request_id_card = $_POST['request_id_card'];
    $request_category_id = $_POST['request_category_id'];
    $request_parcel_description = $_POST['request_parcel_description'];
    $request_Sending_station_id = $_POST['request_Sending_station_id'];
    $request_receiving_station_id  = $_POST['request_receiving_station_id'];
    $request_departure_date = $_POST['request_departure_date'];
    $request_departure_time = $_POST['request_departure_time'];
    $request_estimated_arrival_date = $_POST['request_estimated_arrival_date'];
    $request_estimated_arrival_time = $_POST['request_estimated_arrival_time'];
    $request_receiver_full_name = $_POST['request_receiver_full_name'];
    $request_receiver_mobile = $_POST['request_receiver_mobile'];
    $request_receiver_email = $_POST['request_receiver_email'];
    $request_receiver_id_card = $_POST['request_receiver_id_card'];


    $sql = "UPDATE customer_requests SET 
    request_ref='$request_ref',
    request_customer_full_name='$request_customer_full_name', 
    request_mobile='$request_mobile', 
    request_email='$request_email', 
    request_id_card='$request_id_card',
    request_category_id='$request_category_id', 
    request_parcel_description='$request_parcel_description', 
    request_Sending_station_id='$request_Sending_station_id', 
    request_receiving_station_id='$request_receiving_station_id', 
    request_departure_date='$request_departure_date',
    request_departure_time='$request_departure_time', 
    request_estimated_arrival_date='$request_estimated_arrival_date', 
    request_estimated_arrival_time='$request_estimated_arrival_time', 
    request_receiver_full_name='$request_receiver_full_name', 
    request_receiver_mobile='$request_receiver_mobile', 
    request_receiver_email='$request_receiver_email', 
    request_receiver_id_card='$request_receiver_id_card' 
    WHERE request_id = '$request_id'";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("request.php")</script>';
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
                        <h6 class="card-title mb-1">Edit Customer Request</h6>
                    </div>
                    
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Reference Number" type="text" name="request_ref" value="<?php echo $row['request_ref'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Customer Full Name" type="text" name="request_customer_full_name" value="<?php echo $row['request_customer_full_name'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Customer Mobile Number" type="text" name="request_mobile" value="<?php echo $row['request_mobile'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Customer Email" type="text" name="request_email" value="<?php echo $row['request_email'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Customer ID Card" type="text" name="request_id_card" value="<?php echo $row['request_id_card'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Parcel Description" type="text" name="request_parcel_description" value="<?php echo $row['request_parcel_description'];?>">
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM categories";

                    $rows = mysqli_query($conn, $sql);
                    ?>
                    <div class="row row-sm mg-t-20">
                        <h6 class="mt-4">Goods Category</h6>
                        </br>
                        <div class="col-lg">
                        <br>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <div class="radio inlineblock m-r-25">
                                    
                                    <input type="radio" id="<?php echo $row['Category_id']; ?>" name="request_category_id" value="<?php echo $row['Category_id']; ?>">
                                    <label for="<?php echo $row['Category_id']; ?>"><?php echo $row['Category_name']; ?></label>
                                </div>
                            <?php  endwhile; ?> 
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM station";

                    $rows = mysqli_query($conn, $sql);
                    ?>
                    <div class="row row-sm mg-t-20">
                        <h6 class="mt-4">Sending Station</h6><br>
                        <div class="col-lg">
                        <br>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <div class="radio inlineblock m-r-25">
                                    
                                    <input type="radio" id="<?php echo $row['Station_id']; ?>" name="request_Sending_station_id" value="<?php echo $row['Station_id']; ?>">
                                    <label for="<?php echo $row['Station_id']; ?>"><?php echo $row['Station_name']; ?></label>
                                </div>
                            <?php  endwhile; ?> 
                        </div>
                    </div>

                    <?php
                    $sql = "SELECT * FROM station";

                    $rows = mysqli_query($conn, $sql);
                    ?>
                    <div class="row row-sm mg-t-20">
                        <h6 class="mt-4">Receiving Station</h6><br>
                        <div class="col-lg">
                        <br>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <div class="radio inlineblock m-r-25">
                                    
                                    <input type="radio" id="<?php echo $row['Station_id']; ?>" name="request_receiving_station_id" value="<?php echo $row['Station_id']; ?>">
                                    <label for="<?php echo $row['Station_id']; ?>"><?php echo $row['Station_name']; ?></label>
                                </div>
                            <?php  endwhile; ?> 
                        </div>
                    </div>

                    <?php 
                    $sql = "SELECT * FROM customer_requests WHERE request_id = '$request_id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <h6 class="mt-4">Departure Date</h6>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Departure Date" type="date" name="request_departure_date" value="<?php echo $row['request_departure_date'];?>">
                        </div>
                    </div>
                    <h6 class="mt-4">Departure Time</h6>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Departure Time" type="time" name="request_departure_time" value="<?php echo $row['request_departure_time'];?>">
                        </div>
                    </div>
                    <h6 class="mt-4">Estimated Arrival Date</h6>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Estimated Arrival Date" type="date" name="request_estimated_arrival_date" value="<?php echo $row['request_estimated_arrival_date'];?>">
                        </div>
                    </div>
                    <h6 class="mt-4">Estimated Arrival Time</h6>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Estimated Arrival Time" type="time" name="request_estimated_arrival_time" value="<?php echo $row['request_estimated_arrival_time'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Receiver Full Name" type="text" name="request_receiver_full_name" value="<?php echo $row['request_receiver_full_name'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Receiver Mobile" type="text" name="request_receiver_mobile" value="<?php echo $row['request_receiver_mobile'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Receiver Email" type="text" name="request_receiver_email" value="<?php echo $row['request_receiver_email'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <input class="form-control" placeholder="Receiver ID Card" type="text" name="request_receiver_id_card" value="<?php echo $row['request_receiver_id_card'];?>">
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <button name="submit" class="btn btn-primary btn-round">Edit request</button>
                        <a href="request.php" class="btn btn-default btn-round btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<?php endblock() ?>
<?php flushblocks(); ?>