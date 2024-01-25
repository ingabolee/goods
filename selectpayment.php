<?php
if ($_SESSION["login_rank"] = "1"){
    include 'templates/temple.php';
}
else {
    header("Location: notauthorised.php");
}


?>

<?php startblock('student') ?>


   
<div class="row">
    <div class="col-lg-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
                <div>
                    <h6 class="card-title mb-1">Select Payment Method</h6>
                </div>
                <div class="table-responsive">
                    <table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                        <thead>
                            <tr>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M-PESA</td>
                                <td><button onclick="window.location.href='mpesa.php'" class="btn btn-success btn-round">Select</button></td>
                            </tr>
                            <tr>
                                <td>Card</td>
                                <td><button onclick="window.location.href='card.php'" class="btn btn-success btn-round">Select</button></td>
                            </tr>
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