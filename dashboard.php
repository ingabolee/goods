
<?php include 'templates/temple.php'; ?>



<?php
error_reporting(0);
    $sql = "SELECT * FROM customer_requests";
    $result = mysqli_query($conn, $sql);
    $request_count = mysqli_num_rows($result);

    $sql = "SELECT * FROM dispatch";
    $result = mysqli_query($conn, $sql);
    $dispatch_count = mysqli_num_rows($result);

    $sql = "SELECT * FROM driver";
    $result = mysqli_query($conn, $sql);
    $driver_count = mysqli_num_rows($result);

    $sql = "SELECT * FROM station";
    $result = mysqli_query($conn, $sql);
    $station_count = mysqli_num_rows($result);

?>

<?php startblock('student') ?>
			<div class="container-fluid">
                <div class="row row-sm">
					<div class="col-sm-6 col-xl-3 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Customer Requests</p>
										<div class="ml-auto">
											<i class="fab fa-rev fs-20 text-secondary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25"><?php echo $request_count; ?></h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Dispatches</p>
										<div class="ml-auto">
											<i class="fab fa-rev fs-20 text-secondary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25"><?php echo $dispatch_count; ?></h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Drivers</p>
										<div class="ml-auto">
											<i class="fab fa-rev fs-20 text-secondary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25"><?php echo $driver_count; ?></h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3 col-lg-6">
							<div class="card custom-card">
								<div class="card-body dash1">
									<div class="d-flex">
										<p class="mb-1 tx-inverse">Stations</p>
										<div class="ml-auto">
											<i class="fab fa-rev fs-20 text-secondary"></i>
										</div>
									</div>
									<div>
										<h3 class="dash-25"><?php echo $station_count; ?></h3>
									</div>
									<div class="progress mb-1">
										<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--End  Row -->
					<!-- Row-->
					<div class="row">
						<div class="col-sm-12 col-xl-12 col-lg-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Customer Requests</h6>
									</div>
									<div class="table-responsive">
									<?php
										$sql = "SELECT * FROM customer_requests";

										$rows = mysqli_query($conn, $sql);
										?>
										<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
											<thead>
												<tr>
													<th>Sender Name</th>
													<th>Sender Phone</th>
													<th>Description</th>
													<th>Departure Date</th>
													<th>Departure Time</th>
													<th>Receiver Name</th>
													<th>Receiver Phone</th>
													<th>Request Status</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<?php   while($row = mysqli_fetch_assoc($rows)):?>
													<td><?php echo $row["request_customer_full_name"]?></td>
													<td><?php echo $row["request_mobile"]?></td>
													<td><?php echo $row["request_parcel_description"]?></td>
													<td><?php echo $row["request_departure_date"]?></td>
													<td><?php echo $row["request_departure_time"]?></td>
													<td><?php echo $row["request_receiver_full_name"]?></td>
													<td><?php echo $row["request_receiver_mobile"]?></td>
													<td><?php echo $row["request_status"]?></td>
												</tr>
												<?php  endwhile; ?>
											<tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="row">
						<div class="col-sm-12 col-xl-12 col-lg-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Payments</h6>
									</div>
									<div class="table-responsive">
										<?php
										$sql = "SELECT * FROM Payment";

										$rows = mysqli_query($conn, $sql);
										?>
										<table id="exportexample" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
											<thead>
												<tr>
													<th>Payment Mode</th>
													<th>Reference number</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<?php   while($row = mysqli_fetch_assoc($rows)):?>
													<td><?php echo $row["Payment_mode"]?></td>
													<td><?php echo $row["Payment_ref"]?></td>
													<td><?php echo $row["Payment_amount"]?></td>
												</tr>
												<?php  endwhile; ?>
											<tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
<?php endblock('student') ?>
<?php flushblocks(); ?>