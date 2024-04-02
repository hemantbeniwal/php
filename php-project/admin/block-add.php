<?php
require_once("config.php");
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
						<h1 class="page-head-line">Block Add</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Add Block
						</span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
								<?php include_once("message.php"); ?>

								<form action="block-save.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Identifier</label>
										<input class="form-control" type="text" name="identifier">
									</div>
									<div class="form-group">
										<label>Title</label>
										<input class="form-control" type="text" name="title">
									</div>
									<div class="form-group">
										<label>Heading</label>
										<input class="form-control" type="text" name="heading">
									</div>
									<div class="form-group">
										<label>Description</label>
										<!-- <input class="form-control" type="text" name="description"> -->
										<textarea name="description" cols="30" rows="10"></textarea>                                      
									</div>
									</div>
									<div class="form-group">
										<label>Ordering</label>
										<input class="form-control" type="number" name="ordering">
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control" name="status">
												<option value="1">Enable</option>
												<option value="2">Disable</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-08">
												<div class="panel panel-default">
													<div class="panel-body">

														<!-- <div class="form-group">
															<label class="control-label col-lg-4"><strong> Banner
																Image</strong></label>
															<div class="">
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<span class="fileupload-preview"></span>
																	<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
																</div>
															</div>
														</div> -->
														<!-- <input type="file" name="banner_image"></span> -->
														<div class="form-group">
															<label class="control-label col-lg-4"></label>
															<div class="">
																<div class="fileupload fileupload-new"
																	data-provides="fileupload">
																	<div class="fileupload-preview thumbnail"
																		style="width: 200px; height: 150px;"></div>
																	<div>
																		<span class="btn btn-file btn-success"><span
																				class="fileupload-new">Select
																				image</span>
																			<span
																				class="fileupload-exists">Change</span><input
																				type="file" name="image"></span>
																		<!-- <input type="file" name="image"></span> -->
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
									<button class="btn btn-info">Save </button>

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