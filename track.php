<?php include 'header.php'; ?>

<section class="page-banner-section contact">
	<div class="container">
		<div class="page-banner-box">
			<h1>Track a Package.</h1>
			<a href="contact.php">Request a Free Quote</a>
		</div>
	</div>
</section>
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

			</div>
			<div class="col-md-6">
				<div class="contact-box">
					<form id="contact-form" method="post">
						<h2>Track Package Here</h2>
						<p>Please provide the tracking number provided to you buy your seller to access this page and see your package information</p>
						<div class="row">

							<div class="col-sm-12">
								<input name="term" required="" type="text" placeholder="Enter Your Tracking Number">
							</div>
						</div>

						<p align="center">

							<input type="submit" name="save" value="Track Package">
						</p>

						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">

			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">

		<?php
		include 'Admin/conn.php';
// Check connection
		if (!$link) {
			die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_POST['save'])){
			$name = $_POST['term'];
			if (empty($name)) {
				echo "<div class='alert alert-danger'>
				<strong>Failed!</strong> Tracking Id Cannot Be Empty.
				</div>";
			}else{

				$sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
				$result = mysqli_query($link, $sql);

				if (mysqli_num_rows($result) > 0) {
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) {?> 
						<h3 align="center">Tracking information for tracking number <?php echo $row["ship_id"] ?></h3>
						<div class="col-md-6">
							<h3 align="center">RECEIVERS DETAILS</h3><br>
							<div class="table-responsive">
								<table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

									<tbody>
										<tr>
											<td>
												<div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> NAME:</b></a> </div>
											</td> 
											<td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

										</tr>
										<tr>

											<tr>
												<td>
													<div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
												</td>
												<td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

											</tr>
											<tr>
												<td>
													<div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
												</td>
												<td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

											</tr>
											<tr>
												<td>
													<div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Number:</b></a> </div>
												</td>
												<td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

											</tr>
											<tr>
												<td>
													<div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Email:</b></a> </div>
												</td>
												<td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

											</tr>

										</tbody>
									</table>
								</div><br>
							</div>

							<div class="col-md-6">
								<h3 align="center">SENDER's DETAILS</h3><br>
								<div class="table-responsive">
									<table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

										<tbody>
											<tr>
												<td>
													<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> NAME:</b></a> </div>
												</td> 
												<td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

											</tr>
											<tr>

												<tr>
													<td>
														<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
													</td>
													<td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

												</tr>
												<tr>
													<td>
														<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
													</td>
													<td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

												</tr>
												<tr>
													<td>
														<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Number:</b></a> </div>
													</td>
													<td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

												</tr>
												<tr>
													<td>
														<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Email:</b></a> </div>
													</td>
													<td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

												</tr>

											</tbody>
										</table>
									</div><br>
								</div>

								<div class="col-md-6">
									<h3 align="center">SHIPMENT DETAILS</h3><br>
									<div class="table-responsive">
										<table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

											<tbody>
												<tr>
													<td>
														<div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
													</td> 
													<td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

												</tr>
												<tr>

													<tr>
														<td>
															<div class="contact-container"><a href="#" style="color: #ff0000;"><b>PRODUCT <br> NAME:</b></a> </div>
														</td>
														<td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

													</tr>
													<tr>
														<td>
															<div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRACKING<br> NUMBER:</b></a> </div>
														</td>
														<td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

													</tr>
													<tr>
														<td>
															<div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> STATUS:</b></a> </div>
														</td>
														<td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

													</tr>
													<tr>
														<td>
															<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
														</td>
														<td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

													</tr>
												</tbody>
											</table>
										</div><br>
									</div>
									<div class="col-md-6">
										<h3 align="center">PACKAGE DETAILS</h3><br>
										<div class="table-responsive">
											<table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

												<tbody>
													<tr>
														<td>
															<div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
														</td> 
														<td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

													</tr>
													<tr>

														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

														</tr>
														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>DEPARTURE<br> DATE:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

														</tr>
														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> DATE:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

														</tr>
														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

														</tr>
														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

														</tr>

														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

														</tr>
														<tr>
															<td>
																<div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
															</td>
															<td style="color: #fff; text-transform: uppercase;"><?php echo $row["status"] ?></td>

														</tr>
													</tbody>
												</table>
											</div><br>
										</div>

										<!-- <body > -->
											<br><br>

											<?php       
										}
									} else {
										echo "<div class='alert alert-danger'>
										<strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
										</div>";
									}
								}
							}

							?>


						</div> 
					</div> 










					<?php include 'footer.php'; ?>