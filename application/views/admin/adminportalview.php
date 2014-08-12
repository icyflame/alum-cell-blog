<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<div style="text-align: center;">

		<h1> Administrator Portal </h1>

	</div>

	<table class="table table-bordered table-striped">

		<thead>

			<th>Post ID</th>
			<th>User ID</th>
			<th>Time</th>
			<th></th>

		</thead>

		<tbody>

			<?php foreach($data as $row): ?>

			<tr>

				<td>
					<?php echo $row['postid']; ?>
				</td>

				<td>
					<?php echo $row['userid']; ?>
				</td>

				<td>
					<?php echo $row['time']; ?>
				</td>

				<td style="text-align: center; ">
					<a href="#">
						<button class="btn btn-primary">
							View Post
						</button>
					</a>
				</td>

			</tr>

		<?php endforeach; ?>

	</tbody>

</table>

</body>

</html>