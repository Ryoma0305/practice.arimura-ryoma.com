<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="/assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
wp_enqueue_script('jquery');
wp_head();
?>
</head>

<body>
	<section class="mainvisual" <?php body_class(); ?>>
	 <header>
		<div class="header-content">
			<h1 class="header-content-logo robot"><a href="<?php echo home_url('/'); ?>">絞り込み検索サンプル</a></h1>
		</div>
	</header>
