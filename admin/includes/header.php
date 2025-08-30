<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Evidenthousebuilders Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<style>
	.bg-primary , .btn-primary{
		background-color: #0E2B5C !important;
		border: 0;
	}
</style>
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary text-white">
					<div class="sidebar-header" style="background-color: #FF4D00; text-align: center;">
					<img src="../assets/images/logo/logo-footer.png" width="100" alt="">
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="enquiries.php"> <i class="glyphicon glyphicon-pencil"></i>Enquiries <span class="pull-right"><?=counting("enquiries", "id")?></span></a></li>
<li><a href="users.php"> <i class="glyphicon glyphicon-user"></i>Admin <span class="pull-right"><?=counting("users", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>

				<div class="visit">
					<a href="https://inkaradigital.com/" class="btn" style="background-color: #FF4D00; color: #fff; " target="_blank" >Designed by Inkara Digital &hearts;</a>
				</div>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">