<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

if(isset($_POST['submit'])){
    $Payment_ref = $_POST['Payment_ref'];
    $Payment_amount = $_POST['Payment_amount'];
    $Payment_request_id = $_POST['Payment_request_id'];

    $sql = "UPDATE customer_requests SET request_status='PENDING DISPATCH' WHERE request_id='$Payment_request_id'";
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO payment (Payment_mode, Payment_ref, Payment_amount, Payment_request_id) 
                VALUES ('MPESA', '$Payment_ref', '$Payment_amount', '$Payment_request_id')";

    $result = mysqli_query($conn, $sql);
    if ($result){
        echo '<script>window.location.replace("print.php")</script>';
    }
}

?>


<?php startblock('student') ?>
   
<form method="POST" action="">
    <div class="list-group-item py-4" data-acc-step>
        <h6 class="mb-0" data-acc-title>ENTER MPESA NUMBER:</h6>
        <div data-acc-content>
            <div class="my-3">
                <div class="form-group">
                    <input type="tel" inputmode="numeric" maxlength="10" placeholder="0000000000" name="card" class="form-control">
                </div>
                <div class="form-group form-row">
                    
                    <div class="col-sm-4">
                        <label>Reference Number:</label>
                            <input class="form-control" placeholder="Ref No." type="text" name="Payment_ref">
                    </div>
                    <div class="col-sm-4">
                        <label>Amount:</label>
                            <input class="form-control" placeholder="Amount" type="number" name="Payment_amount">
                    </div>
                </div>
            </div>
        </div>
        <?php
            $sql = "SELECT * FROM customer_requests WHERE request_status='PENDING PAYMENT'";

            $rows = mysqli_query($conn, $sql);
            ?>
            <div class="row row-sm mg-t-20">
                <h6 class="mt-4">Customer Requests</h6><br>
                <div class="col-lg">
                <br>
                    <?php   while($row = mysqli_fetch_assoc($rows)):?>
                        <div class="radio inlineblock m-r-25">
                            
                            <input type="radio" id="<?php echo $row['request_id']; ?>" name="Payment_request_id" value="<?php echo $row['request_id']; ?>">
                            <label for="<?php echo $row['request_id']; ?>"><?php echo $row['request_parcel_description']; ?></label>
                        </div>
                    <?php  endwhile; ?> 
                </div>
            </div>
            
            
            <div class="row row-sm mg-t-20">
                <button name="submit" class="btn btn-primary btn-round">Initiate Payment</button>
                <a href="dispatch.php" class="btn btn-default btn-round btn-warning">Cancel</a>
            </div>
    </div>
</form>

<?php endblock() ?>
<?php flushblocks(); ?>


