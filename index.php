<?php
require_once 'config.php';
if(isset($_SESSION['userData'])){
	header('location: view.php');
}
$loginURL="";
$authUrl = $googleClient->createAuthUrl();
$loginURL = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP - Google SignIn </title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<p class="main_title">
		Login with google using Php 	
	</p>
	<section class="main">
		<div class="inner">
			
			<a href="<?= htmlspecialchars( $loginURL ); ?>"><img src="assets/image/google-signin-button.png" class="fbbutton" alt="Login With Google"></a>
		</div>
	</section>
</body>
</html>