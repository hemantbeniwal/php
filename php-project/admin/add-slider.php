<!-- Menu Name: Manage Slider (list/add/edit/delete)
table: sliders 
field: 
      id
      title
      image
      ordering (integer type)
      status(1 - Enable, 2 - Disable)
      created_at
      updated_at

Menu Name: Manage Pages (list/add/edit/delete)
table: pages 
field: 
        id
        title
        heading
        description(texteditor)
        banner_image
        ordering (integer type)
        status(1 - Enable, 2 - Disable)
        url_key (unique/all small letter/without space)
        created_at
        updated_at

Menu Name: Manage Block (list/add/edit/delete)
table: blocks 
field: 
        id
        identifier (unique/all small letter/without space)
        title
        heading
        description(texteditor)
        banner_image
        ordering (integer type)
        status(1 - Enable, 2 - Disable)
        created_at
        updated_at

Menu Name: Manage Enquiry (list only)
table: enquiries 
field: 
        id
        name
        email
        phone
        message
        status(1 - Un-Read, 2 - Read) default value is 1
        created_at
        updated_at -->


<?php
session_start();
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
						<h1 class="page-head-line">Slider Add</h1>
						<span class="page-subhead-line"><strong><a href="dashboard.php">Dashboard</a> >> Add Slider </span>

					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-body">
								<?php include_once("message.php");  ?>

								<form role="form">
									<div class="form-group">
										<label>Enter Title</label>
										<input class="form-control" type="text">
									</div>
									<div class="form-group">
										<label>Enter Ordering</label>
										<input class="form-control" type="number">
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control">
												<option></option>
												<option>Enable</option>
												<option>Disable</option>
											</select>
										</div>
										<div class="row">
											<div class="col-md-08">
												<div class="panel panel-default">
													<div class="panel-body">

														<div class="form-group">
															<label class="control-label col-lg-4"><strong>Image Upload</strong></label>
															<div class="">
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<span class="fileupload-preview"></span>
																	<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-lg-4"></label>
															<div class="">
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
																	<div>
																		<span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
																		<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
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