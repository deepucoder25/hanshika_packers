<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= isset($title) ? htmlspecialchars($title, ENT_QUOTES) : "Page Not Found (404) | " . htmlspecialchars($company3, ENT_QUOTES) ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= isset($description) ? htmlspecialchars($description, ENT_QUOTES) : "The requested page was not found." ?>" />
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="apple-touch-icon" href="<?=base_url('assets/img/xs.png')?>">
    <link rel="icon" type="image/png" href="<?=base_url('assets/img/xs.png')?>" />
    <link rel="apple-touch-icon" href="<?=base_url('assets/img/xs.png')?>">

<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/xs.png">
<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css?v=3.5" type="text/css" media="all" />
<script type="text/javascript" src="<?=base_url()?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>


</head>
