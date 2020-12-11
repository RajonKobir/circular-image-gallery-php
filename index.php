<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Circular Photo Gallery</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/lightbox.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	
    <link rel="stylesheet" href="assets/css/bootstrap.css">
	
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

	<!-- header section-->
	<header>
		<div class="heading_section text-center">
			<h1>I AM VISION CREATOR</h1>
		</div>
	</header>



	<!-- saving images in the server folder -->
	
	<?php 
$path = 'files/';
	if(isset($_POST['submit_1'])){
		$temp = explode(".", $_FILES["file_1"]["name"]);
		$image_1= "image_1".'.'.end($temp);
		move_uploaded_file($_FILES['file_1']['tmp_name'], $path.$image_1);
	}
	
	if(isset($_POST['submit_2'])){
		$temp = explode(".", $_FILES["file_2"]["name"]);
		$image_2= "image_2".'.'.end($temp);
		move_uploaded_file($_FILES['file_2']['tmp_name'], $path.$image_2);
	}
	
	if(isset($_POST['submit_3'])){
		$temp = explode(".", $_FILES["file_3"]["name"]);
		$image_3= "image_3".'.'.end($temp);
		move_uploaded_file($_FILES['file_3']['tmp_name'], $path.$image_3);
	}
	
	if(isset($_POST['submit_4'])){
		$temp = explode(".", $_FILES["file_4"]["name"]);
		$image_4= "image_4".'.'.end($temp);
		move_uploaded_file($_FILES['file_4']['tmp_name'], $path.$image_4);
	}
	
	if(isset($_POST['submit_5'])){
		$temp = explode(".", $_FILES["file_5"]["name"]);
		$image_5= "image_5".'.'.end($temp);
		move_uploaded_file($_FILES['file_5']['tmp_name'], $path.$image_5);
	}
	
	if(isset($_POST['submit_6'])){
		$temp = explode(".", $_FILES["file_6"]["name"]);
		$image_6= "image_6".'.'.end($temp);
		move_uploaded_file($_FILES['file_6']['tmp_name'], $path.$image_6);
	}
	
	if(isset($_POST['submit_7'])){
		$temp = explode(".", $_FILES["file_7"]["name"]);
		$image_7= "image_7".'.'.end($temp);
		move_uploaded_file($_FILES['file_7']['tmp_name'], $path.$image_7);
	}
	
	if(isset($_POST['submit_8'])){
		$temp = explode(".", $_FILES["file_8"]["name"]);
		$image_8= "image_8".'.'.end($temp);
		move_uploaded_file($_FILES['file_8']['tmp_name'], $path.$image_8);
	}
	
	if(isset($_POST['submit_9'])){
		$temp = explode(".", $_FILES["file_9"]["name"]);
		$image_9= "image_9".'.'.end($temp);
		move_uploaded_file($_FILES['file_9']['tmp_name'], $path.$image_9);
	}
	
	if(isset($_POST['submit_10'])){
		$temp = explode(".", $_FILES["file_10"]["name"]);
		$image_10= "image_10".'.'.end($temp);
		move_uploaded_file($_FILES['file_10']['tmp_name'], $path.$image_10);
	}
	
	if(isset($_POST['submit_11'])){
		$temp = explode(".", $_FILES["file_11"]["name"]);
		$image_11= "image_11".'.'.end($temp);
		move_uploaded_file($_FILES['file_11']['tmp_name'], $path.$image_11);
	}
	
	if(isset($_POST['submit_12'])){
		$temp = explode(".", $_FILES["file_12"]["name"]);
		$image_12= "image_12".'.'.end($temp);
		move_uploaded_file($_FILES['file_12']['tmp_name'], $path.$image_12);
	}
	
	if(isset($_POST['submit_13'])){
		$temp = explode(".", $_FILES["file_13"]["name"]);
		$image_13= "image_13".'.'.end($temp);
		move_uploaded_file($_FILES['file_13']['tmp_name'], $path.$image_13);
	}
	
	if(isset($_POST['submit_14'])){
		$temp = explode(".", $_FILES["file_14"]["name"]);
		$image_14= "image_14".'.'.end($temp);
		move_uploaded_file($_FILES['file_14']['tmp_name'], $path.$image_14);
	}
	?>



	
	
								<!--  Showing images in the page -->
	
	
	<div class="circular_image_gallery">
		<div class="circular_image_gallery_inner">
			<div class="bigger_circle parent-div d-flex align-items-center justify-content-center">
			
						<div class="position_1 image_position">
							<div class="position_1_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_1">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_1" class="upload_button" type="file" name="file_1" required />
									<input class="submit_button" type="submit" name="submit_1" value="Upload" />
								</form>
								
								<h3>
									<?php 
										$allfiles = scandir($path);
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_1'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_2 image_position">
							<div class="position_2_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_2">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_2" class="upload_button" type="file" name="file_2" required />
									<input class="submit_button" type="submit" name="submit_2" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_2'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_3 image_position">
							<div class="position_3_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_3">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_3" class="upload_button" type="file" name="file_3" required />
									<input class="submit_button" type="submit" name="submit_3" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_3'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_4 image_position">
							<div class="position_4_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_4">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_4" class="upload_button" type="file" name="file_4" required />
									<input class="submit_button" type="submit" name="submit_4" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_4'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_5 image_position">
							<div class="position_5_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_5">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_5" class="upload_button" type="file" name="file_5" required />
									<input class="submit_button" type="submit" name="submit_5" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_5'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_6 image_position">
							<div class="position_6_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_6">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_6" class="upload_button" type="file" name="file_6" required />
									<input class="submit_button" type="submit" name="submit_6" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_6'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_7 image_position">
							<div class="position_7_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_7">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_7" class="upload_button" type="file" name="file_7" required />
									<input class="submit_button" type="submit" name="submit_7" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_7'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
						<div class="position_8 image_position">
							<div class="position_8_inner">
								<form method="POST" action="" enctype="multipart/form-data">
									<label for="file_input_8">
										<i class="fa fa-camera camera_icon"></i>
									</label>
									<input id="file_input_8" class="upload_button" type="file" name="file_8" required />
									<input class="submit_button" type="submit" name="submit_8" value="Upload" />
								</form>
								
								<h3>
									<?php 
										foreach($allfiles as $f){
										$pathinfo = pathinfo($path.$f);
										if($f != '.' && $f != '..'){
											if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
												if($pathinfo['filename']== 'image_8'){
													echo '<img class="image_1" src="files/'.$f.'"/> 
														<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
															<i class="fa fa-search"></i>
														</a>
														<a class="delete_btn" href="deletefile.php?filename='.$f.'">
															<i class="fa fa-trash delete_icon"></i>
														</a>
														';
													}
												}
											}
										}
									?>
								<h3>
								
								
							</div>
						</div>
		
		
				<div class="medium_circle child-div parent-div d-flex align-items-center justify-content-center">
						<div class="medium_circle_inner">
								<div class="position_9 image_position">
									<div class="position_9_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_9">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_9" class="upload_button" type="file" name="file_9" required />
											<input class="submit_button" type="submit" name="submit_9" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_9'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
								<div class="position_10 image_position">
									<div class="position_10_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_10">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_10" class="upload_button" type="file" name="file_10" required />
											<input class="submit_button" type="submit" name="submit_10" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_10'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
								<div class="position_11 image_position">
									<div class="position_11_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_11">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_11" class="upload_button" type="file" name="file_11" required />
											<input class="submit_button" type="submit" name="submit_11" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_11'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
								<div class="position_12 image_position">
									<div class="position_12_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_12">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_12" class="upload_button" type="file" name="file_12" required />
											<input class="submit_button" type="submit" name="submit_12" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_12'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
								<div class="position_13 image_position">
									<div class="position_13_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_13">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_13" class="upload_button" type="file" name="file_13" required />
											<input class="submit_button" type="submit" name="submit_13" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_13'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
								<div class="position_14 image_position">
									<div class="position_14_inner">
										<form method="POST" action="" enctype="multipart/form-data">
											<label for="file_input_14">
												<i class="fa fa-camera camera_icon"></i>
											</label>
											<input id="file_input_14" class="upload_button" type="file" name="file_14" required />
											<input class="submit_button" type="submit" name="submit_14" value="Upload" />
										</form>
										
										<h3>
											<?php 
												foreach($allfiles as $f){
												$pathinfo = pathinfo($path.$f);
												if($f != '.' && $f != '..'){
													if($pathinfo['extension']== 'jpg' || $pathinfo['extension']== 'gif' || $pathinfo['extension']== 'png' || $pathinfo['extension']== 'jpeg'){
														if($pathinfo['filename']== 'image_14'){
															echo '<img class="image_1" src="files/'.$f.'"/> 
																<a class="zoom_btn" href="files/'.$f.'" data-lightbox="mygallery">
																	<i class="fa fa-search"></i>
																</a>
																<a class="delete_btn" href="deletefile.php?filename='.$f.'">
																	<i class="fa fa-trash delete_icon"></i>
																</a>
																';
															}
														}
													}
												}
											?>
										<h3>
										
										
									</div>
								</div>
			
						</div>
					<div class="smaller_circle child-div">
						<div class="smaller_circle_inner">
							<div class="vission_creator_image">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
				
	
				

	<!-- end of the body -->
	
		
		

	
	

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/lightbox-plus-jquery.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	
	
	<script src="assets/js/bootstrap.js"></script>
	
	
	<script src="assets/js/main.js" ></script>
</body>
</html>