<html>

<head>

	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'bootstrap/bodymargin.css'; ?>">
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

</body>

</html>