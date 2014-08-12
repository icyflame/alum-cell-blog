<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<div style="text-align: center;">

		<h1> Unmoderated post </h1>

	</div>

	<h3>
		Posted on <?php echo $data['time']; ?>
	</h3>

	<h3>
		Posted by <?php echo $data['screenname']; ?>
	</h3>

	<h3>
		Post content: <br/>
	</h3>

	<div>

		<?php echo $data['postcontent']; ?>

	</div>

</table>

</body>

</html>