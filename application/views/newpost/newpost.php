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

	<input type="text" class="form-control" name="screenname" value="<?php echo $this->session->userdata('fullname'); ?>" style="display: none; "></input>

	<input type="text" class="form-control" name="screenname" placeholder="Screen name" value="<?php echo $this->session->userdata('fullname'); ?>" disabled></input>
	<br/>

	<input type="text" class="form-control" name="datetime" placeholder="Current date and time" value="<?php date_default_timezone_set('Asia/Calcutta'); echo date("H:i jS F, Y"); ?>" disabled></input>
	<br/>

	<input type="text" class="form-control" name="posttitle" placeholder="Post Title"></input>
	<br/>

	<textarea class="form-control" name="postcontent" rows="6" placeholder="Enter your post here"></textarea>
	<br/>

	<input type="submit" value="Submit" class="btn btn-primary btn-lg"></input>

</form>

</body>

</html>