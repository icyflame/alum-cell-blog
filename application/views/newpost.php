<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<br/>
	<br/>

	<?php echo form_open('newpostcont/addpost') ?>

	<input type="text" class="form-control" name="screenname" placeholder="Screen name"></input>

	<br/>

	<textarea class="form-control" name="postcontent" rows="6" placeholder="Enter your post here"></textarea>

	<br/>

	<input type="submit" value="Submit" class="btn btn-lg"></input>

	</form>

</body>

</html>