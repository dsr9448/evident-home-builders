<?php
				include "includes/header.php";

				 
				?>


				<h1>Enquiries</h1>
				<p>This table includes <?php echo counting("enquiries", "id");?> enquiries.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact number</th>
			<th>Address</th>
			<th>Package</th>
			<th>Plot area</th>
			<th>Floor</th>
			<th>Contacted</th>
			<th>Reviews</th>
			<th>Enquire at</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$enquiries = getAll("enquiries");
				if($enquiries) foreach ($enquiries as $enquiriess):
					?>
					<tr>
		<td><?php echo $enquiriess['id']?></td>
		<td><?php echo $enquiriess['name']?></td>
		<td><?php echo $enquiriess['email']?></td>
		<td><?php echo $enquiriess['contact_number']?></td>
		<td><?php echo $enquiriess['address']?></td>
		<td><?php echo $enquiriess['package']?></td>
		<td><?php echo $enquiriess['plot_area']?></td>
		<td><?php echo $enquiriess['floor']?></td>
		<td><?php echo $enquiriess['is_enabled'] == 1 ? '<a href="save.php?act=update&id='.$enquiriess['id'].'&cat=contacted&val=0"  class="btn btn-success">Yes</a>' : '<a href="save.php?act=update&id='.$enquiriess['id'].'&cat=contacted&val=1"  class="btn btn-danger">No</a>'; ?></td>
		<td><?php echo $enquiriess['reviews']?></td>
		<td><?php echo returnDate($enquiriess['created_at'])?></td>


						<td><a href="edit-enquiries.php?act=edit&id=<?php echo $enquiriess['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $enquiriess['id']?>&cat=enquiries" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				