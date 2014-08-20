<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
	<script src="<?php echo base_url().'bootstrap/jquery-1.10.2.js'; ?>"></script>
	<script src="<?php echo base_url().'bootstrap/bootstrap.min.js'; ?>"></script>

</head>

<body>

	<?php foreach($data as $post): ?>

	<h2> <?= $post['posttitle']; ?> </h2>

	<h4> Posted by <?= $post['screenname'] ?> at <?= $post['time'] ?> </h4>

	<p> <?= auto_link($post['postcontent']); ?> </p>

	<hr/>

<?php endforeach; ?>

</table>

<!-- Modals -->

<!-- Modal to be shown if the account creation is successful -->

<div class="modal fade" id="regdone" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Registered succesfully.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Your account has been successfully registered. You can start posting!
				</p>

				<img src="<?php echo base_url().'images/agendacat.png'; ?>" height="400" width="400"/>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal to be shown if the account creation is unsuccessful -->

<div class="modal fade" id="regincomplete" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">account creation unsuccessful.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Your account could not be created. We are probably working on the issue furiously, please try again after some time.
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- New post added successfully. -->

<div class="modal fade" id="newpostdone" style="z-index:10003" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content" >

			<div class="modal-header" style="text-align: center; ">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Post added.</h4>
			</div>

			<div class="modal-body" style="text-align: center; ">

				<p> Your post was added to the Database. One of our administrators will soon verify it. Once verified, your post will go online.
				</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>

<?php if($hashtag == 'regdone'): ?>

$(document).ready(function(){
	$("#regdone").modal('show');
});

<?php elseif($hashtag == 'regincomplete'): ?>

$(document).ready(function(){
	$("#regincomplete").modal('show');
});

<?php elseif($hashtag == 'newpostdone'): ?>

$(document).ready(function(){
	$("#newpostdone").modal('show');
});

<?php endif; ?>

</script>

</body>

</html>