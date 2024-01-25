<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}

$sql = "SELECT * FROM station";

$rows = mysqli_query($conn, $sql);
?>

<?php startblock('student') ?>


   
<div class="row">
    <div class="col-lg-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">List of Stations</h6>
                </div>
                <div class="table-responsive">
                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                        <thead>
                            <tr>
                                <th>Station Name</th>
                                <th>Description</th>
                                <th>Contact Person</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php   while($row = mysqli_fetch_assoc($rows)):?>
                                <td><?php echo $row["Station_name"]?></td>
                                <td><?php echo $row["Station_desc"]?></td>
                                <td><?php echo $row["Station_contact_person"]?></td>
                                <td><?php echo $row["Station_mobile"]?></td>
                                <td><?php echo $row["Station_email"]?></td>
                                <td><button onclick="window.location.href='editstation.php?id=<?php echo $row['Station_id']; ?>'" class="btn btn-warning btn-round">Edit</button></td>
                                <td><button onclick="window.location.href='deletestation.php?id=<?php echo $row['Station_id']; ?>'" class="btn btn-danger btn-round">Delete</button></td>
                                </tr>
                            <?php  endwhile; ?>
                        <tbody>
                    </table>
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