<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phân tích protein</title>
	<?php require_once('common/head.php'); ?>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=112240536335834&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php require_once('common/header.php'); ?>
	
	<?php
	$url_file = explode('/',$_SERVER['REQUEST_URI']);
	$file_name = $url_file[1].'.php'; 
	if (file_exists($file_name)) {
		require_once($file_name);
	}
	?>
	<?php require_once('common/mobile-menu.php'); ?>
	<?php require_once('common/footer.php'); ?>
	<?php require_once('common/script.php'); ?>
</body>
</html>