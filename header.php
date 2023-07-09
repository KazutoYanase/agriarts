<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package AGRI ARTS
 */
?>
<!DOCTYPE html>
<html lang="ja" prefix="og: //ogp.me/ns# fb: //www.facebook.com/2008/fbml">

<head>
	<title><?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?></title>
	<meta charset="UTF-8">
	<meta name="keywords" content="アグリ・アーツ,アグリアーツ,熊本,天草,農業,資材,栽培,ビニールハウス,求人">
	<meta name="description" content="<?php set_meta_description(); ?>">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<?php if ( is_home() || is_front_page() ) : ?>
	<meta property="og:type" content="website">
	<?php else: ?>
	<meta property="og:type" content="article">
	<?php endif; ?>

	<meta property="og:url" content="<?php set_meta_ogurl(); ?>">
	<meta property="og:image" content="<?php set_meta_image(); ?>">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:title" content="<?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?>">
	<meta property="og:description" content="<?php set_meta_description(); ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php wp_title( '｜', true, 'right' ); bloginfo('name'); ?>">
	<meta name="twitter:description" content="<?php set_meta_description(); ?>">
	<meta name="twitter:image" content="<?php set_meta_image(); ?>">
	<meta name="twitter:url" content="<?php set_meta_ogurl(); ?>">

	<?php wp_head(); ?>

	<link rel="icon" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/slick.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/slick-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= esc_url(get_template_directory_uri()); ?>/asset/css/style.css?<?= time() ?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/common.js"></script>
	<script>
		$(function() {
			$('.menu').on('click', function() {
				$(this).toggleClass('active');
				$("#humnav").toggleClass('active');
			})
		})
		$(function() {
			$('#humnav a').on('click', function() {
				$('#humnav').toggleClass('active');
				$(".menu").toggleClass('active');
			})
		});
	</script>
</head>




<body>
	<!-- PCメニュー -->
	<nav id="pc_nav" class="pc_block">
		<div id="pc_nav_wrap">
			<div id="pc_nav_inner">
				<h1 id="pc_nav_logo"><a href="index.html"><img alt="株式会社アグリアーツ" src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/logo.png"></a></h1>
				<div class="pcmenubtn_1"><a href="index.html">HOME</a></div>
				<div class="pcmenubtn_1"><a href="overview.html">会社概要</a></div>
				<div class="pcmenubtn_1"><a href="projects.html">事業案内</a></div>
				<div class="pcmenubtn_1"><a href="news-archive.html">ニュース</a></div>
				<div class="pcmenubtn_1"><a href="access.html">アクセス</a></div>
				<div class="pcmenubtn_2"><a href="recruit.html">採用情報</a></div>
			</div>
		</div>
	</nav>
	<!-- SPメニュー -->
	<nav id="sp_menu" class="sp_block">
		<div class="fullscreenmenu">
			<div id="humnav">
				<h1 class="spmenubtn_0"><a href="index.html"><img alt="AGRIARTS" src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/logo.png"></a></h1>
				<div class="spmenubtn_1"><a href="overview.html">会社概要</a></div>
				<div class="spmenubtn_1"><a href="projects.html">事業案内</a></div>
				<div class="spmenubtn_1"><a href="news-archive.html">ニュース</a></div>
				<div class="spmenubtn_1"><a href="access.html">アクセス</a></div>
				<div class="spmenubtn_1"><a href="recruit.html">採用情報</a></div>
			</div>
		</div>
		<div class="menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>
	<!-- ヘッダー終わり -->