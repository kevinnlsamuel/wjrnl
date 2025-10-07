<!doctype html>
<html lang="en">
	<head>
	<?php if (!preg_match("/^curl/", $_SERVER['HTTP_USER_AGENT'])): ?>
		<link rel="stylesheet" href="/style.css">
	<?php endif;?>

	<title>
		<?php if (isset($TITLE)) {
				echo $TITLE;
			} else {
				echo 'wjrnl: jrnl(1) on the web!';
			}
		?>
	</title>
</head>

<body>
