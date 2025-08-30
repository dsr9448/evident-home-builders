<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$enquiries = getById("enquiries", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Enquiries</legend>
						<input name="cat" type="hidden" value="enquiries">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							
							<table class="table table-bordered">
								<tbody>
								
									<tr>
										<th scope="row">Name</th>
										<td><?= htmlspecialchars($enquiries['name']) ?></td>
									</tr>
									<tr>
										<th scope="row">Email</th>
										<td><?= htmlspecialchars($enquiries['email']) ?></td>
									</tr>
									<tr>
										<th scope="row">Contact number</th>
										<td><?= htmlspecialchars($enquiries['contact_number']) ?></td>
									</tr>
									<tr>
										<th scope="row">Address</th>
										<td><?= htmlspecialchars($enquiries['address']) ?></td>
									</tr>
									<tr>
										<th scope="row">Package</th>
										<td><?= htmlspecialchars($enquiries['package']) ?></td>
									</tr>
									<tr>
										<th scope="row">Plot area</th>
										<td><?= htmlspecialchars($enquiries['plot_area']) ?></td>
									</tr>
									<tr>
										<th scope="row">Floor</th>
										<td><?= htmlspecialchars($enquiries['floor']) ?></td>
									</tr>
									<tr>
										<th scope="row">Is enabled</th>
										<td><?= htmlspecialchars($enquiries['is_enabled']==0 ? "no" : "yes" ) ?></td>
									</tr>
								</tbody>
							</table>
							
							<label>Reviews</label>
							<textarea class="form-control" name="reviews"><?=$enquiries['reviews']?></textarea><br>
							
							
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				