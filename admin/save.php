<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "enquiries" || $cat_get == "enquiries") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$contact_number = addslashes(htmlentities($_POST["contact_number"], ENT_QUOTES));
$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
$package = addslashes(htmlentities($_POST["package"], ENT_QUOTES));
$plot_area = addslashes(htmlentities($_POST["plot_area"], ENT_QUOTES));
$floor = addslashes(htmlentities($_POST["floor"], ENT_QUOTES));
$is_enabled = addslashes(htmlentities($_POST["is_enabled"], ENT_QUOTES));
$reviews = addslashes(htmlentities($_POST["reviews"], ENT_QUOTES));
$created_at = addslashes(htmlentities($_POST["created_at"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `enquiries` (  `name` , `email` , `contact_number` , `address` , `package` , `plot_area` , `floor` , `is_enabled` , `reviews` , `created_at` ) VALUES ( '".$name."' , '".$email."' , '".$contact_number."' , '".$address."' , '".$package."' , '".$plot_area."' , '".$floor."' , '".$is_enabled."' , '".$reviews."' , '".$created_at."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `enquiries` SET   `reviews` =  '".$reviews."'   WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `enquiries` WHERE id = '".$id_get."' ");
					}
					header("location:"."enquiries.php");
				}
	
			// Handle contacted toggle via GET (as in admin/enquiries.php)
			if($cat == "contacted" || $cat_get == "contacted") {
				// Use GET parameters for id and val, fallback to POST if not set
				$id_contacted = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : '');
				$val_contacted = isset($_GET['val']) ? $_GET['val'] : (isset($_POST['is_enabled']) ? $_POST['is_enabled'] : '');
				if($id_contacted !== '' && $val_contacted !== '') {
					mysqli_query($link, "UPDATE `enquiries` SET `is_enabled` = '".addslashes($val_contacted)."' WHERE `id` = '".addslashes($id_contacted)."' ");
				}
				header("location:enquiries.php");
				exit;
			}

				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>