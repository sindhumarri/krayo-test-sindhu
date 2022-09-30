<?php
session_start();
$login_button = '';
if (!isset($_SESSION['userData'])) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP - Google SignIn</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
	<div class="container">
		<br />
		<h2 align="center">PHP Login using Google Account</h2>
		<br />
		<div class="panel panel-default">
			<?php
			if ($login_button == '') {

				echo '<div class="panel-heading clearfix">
			  		<h4 class="panel-title pull-left">Welcome User</h4>
			  		<div class="btn-group pull-right">
					<a href="upload.php" class="btn btn-primary">Upload Files</a>
			  		</div></div>';
				echo '<img src="' . $_SESSION['userData']['picture'] . '" class="img-responsive img-circle img-thumbnail" />';
				echo '<h3><b>Name :</b> ' . $_SESSION['userData']['f_name'] . " " . $_SESSION['userData']['l_name'] . '</h3>';
				echo '<h3><b>Email :</b> ' . $_SESSION['userData']['email_id'] . '</h3>';
				echo '<h3><a href="logout.php">Logout</h3></div>';
			} else {
				echo '<div align="center">' . $login_button . '</div>';
			}
			?>
		</div>
	</div>
</body>

</html>