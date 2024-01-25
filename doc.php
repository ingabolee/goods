<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

include 'config.php';

$payment_id = $_GET["id"];
$sql = "SELECT * FROM payment WHERE Payment_id = '$payment_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$request_id = $row['Payment_request_id'];
$sql = "SELECT * FROM customer_requests WHERE request_id  = '$request_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo $row;

?>


<?php startblock('student') ?>
   

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    
                    <div class="table-responsive mg-t-40">
                        <table class="table table-invoice table-bordered">
                            <thead>
                                <tr>
                                    <th class="wd-20p">Customer</th>
                                    <th class="wd-20p">Phone</th>
                                    <th class="wd-20p">Receiver</th>
                                    <th class="wd-20p">Receiver Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['request_customer_full_name'];?></td>
                                    <td><?php echo $row['request_mobile'];?></td>
                                    <td class="tx-center"><?php echo $row['request_receiver_full_name'];?></td>
                                    <td class="tx-right"><?php echo $row['request_receiver_mobile'];?></td>
                                </tr>
                                
                                <tr>
                                    <td class="valign-middle" colspan="2" rowspan="4">
                                        <div class="invoice-notes">
                                            <label class="main-content-label tx-13">Details:</label>
                                            <p>Description: <?php echo $row['request_parcel_description'];?></p>
                                            <p>Departure Date: <?php echo $row['request_departure_date'];?></p>
                                            <p>Arrival Date: <?php echo $row['request_estimated_arrival_date'];?></p>
                                        </div><!-- invoice-notes -->
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td class="tx-right" colspan="2">
                                        <?php
                                        $sql = "SELECT * FROM payment WHERE Payment_id = '$payment_id'";
                                        $result = mysqli_query($conn, $sql);
                                        $rows = mysqli_fetch_assoc($result);
                                        ?>
                                        <h4 class="tx-bold">Total KES <?php echo $rows['Payment_amount'];?></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print Receipt</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                

<?php endblock() ?>
<?php flushblocks(); ?>
<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/table-data.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatable/fileexport/jszip.min.js"></script>
<script src="assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
<script src="assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
<script src="assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
<script src="assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
<script src="assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>