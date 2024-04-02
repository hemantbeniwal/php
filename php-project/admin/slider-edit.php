<?php
require_once("config.php");

$id = $_GET['id'] ?? 0;


	$selQuery = "SELECT* FROM `sliders` WHERE id=$id";
	$userrec = $conn->query($selQuery);
	
	$_slider = mysqli_fetch_assoc($userrec);
    

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Responsive Bootstrap Advance Admin Template</title>
	<?php include_once("includes/head.php"); ?>
</head>

<body>
	<div id="wrapper">
		<?php include_once("includes/nav-top.php"); ?>
		<?php include_once("includes/nav-side.php"); ?>
		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-head-line">Slider Edit</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Edit Slider
						</span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
								<?php include_once("message.php"); ?>

								<form action="slider-update.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $_slider["id"] ?>">
									<div class="form-group">
										<label>Enter Title</label>
										<input class="form-control" type="text" name="title" value="<?= $_slider["title"] ?>">
									</div>
									<div class="form-group">
										<label>Enter Ordering</label>
										<input class="form-control" type="number" name="ordering" value="<?= $_slider["ordering"] ?>">
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label>Status</label>
											<select name="status" >
												<option></option>
												<option value="1" <?= (($_slider['status'] ?? "")=="1") ? "selected":"" ?>>Enable</option>
												<option value="2"<?= (($_slider['status'] ?? "")=="2") ? "selected":"" ?>>Disable</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-08">
												<div class="panel panel-default">
													<div class="panel-body">

														<div class="form-group">
															<label class="control-label col-lg-4"><strong>Image
																	Upload</strong></label>
															<div class="">
																<div class="fileupload fileupload-new"
																	data-provides="fileupload">
																	<span class="fileupload-preview"></span>
																	<a href="#" class="close fileupload-exists"
																		data-dismiss="fileupload"
																		style="float: none">×</a>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-lg-4"></label>
															<div class="">
																<div class="fileupload fileupload-new"
																	data-provides="fileupload">
																	<div class="fileupload-preview thumbnail"
																		style="width: 200px; height: 150px;">
                                                                        <img src="<?= $_slider['image'] ?>" alt="">
                                                                    </div>
																	<div>
																		<span class="btn btn-file btn-success"><span
																				class="fileupload-new">Select
																				image</span><span
																				class="fileupload-exists">Change</span>
																				<input type="file" name="image" value="<?= $_slider['image']?? "" ?>"></span>
																		<a href="#"
																			class="btn btn-danger fileupload-exists"
																			data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>

											</div>
										</div>
									</div>
									<button class="btn btn-info">Updeta </button>

								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->

	<?php include_once("includes/footer.php"); ?>



</body>

</html>