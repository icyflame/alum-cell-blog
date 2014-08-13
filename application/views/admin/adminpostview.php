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

		Post title: <br/>

	</h3>

	<h4>
		<?php echo $data['posttitle']; ?>

	</h4>

	<h3>
		Post content: <br/>
	</h3>

	<div>

		<?php echo $data['postcontent']; ?>

	</div>

	<h3> Edit the status of this post </h3>

	<ul class="nav nav-pills">

		<li><a href="<?php echo site_url('adminportalcont/editstatus/'.$postid.'/3'); ?>">Approve</a></li>
		<li><a href="<?php echo site_url('adminportalcont/editstatus/'.$postid.'/2'); ?>">Reject</a></li>
		<li><a href="<?php echo site_url('adminportalcont/editstatus/'.$postid.'/1'); ?>">Unmoderated</a></li>

	</ul>

	<h4> If you select Approve, the post will be shown on the blog. If you select Reject, the post will be marked as "Moderated, Further feedback required.". If you select Unmoderated, the status of the post will not be changed, and another admin, or you, at a later time, can approve or reject it </h4>

</table>

</body>

</html>