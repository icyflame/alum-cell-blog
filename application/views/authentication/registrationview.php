<html>

<head>


	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<br/>
	<br/>

	<?php echo form_open('registration/register') ?>

	<input type="text" class="form-control" placeholder="Username (min 4 characters)" name="username" value="<?php echo set_value('username') ?>"></input>
	<br/>

	<input type="password" class="form-control" placeholder="Password (min 4 characters)" name="password"></input>
	<br/>

	<input type="password" class="form-control" placeholder="Reenter Password" name="repassword"></input>
	<br/>

	<input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo set_value('name') ?>"></input>
	<br/>

	<input type="text" class="form-control" placeholder="Email ID" name="email" value="<?php echo set_value('email') ?>"></input>
	<br/>

	<input type="submit" value="Submit" class="btn btn-primary btn-lg"></input>

</form>

</body>

</html>