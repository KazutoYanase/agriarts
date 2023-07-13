<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of <main> and all content after
 *
 * @package AGRI ARTS
 */
?>
	<!-- フッター -->
	<footer class="footer">
		<div class="contact">
			<div class="inner">
				<div class="copy">
					<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/foot__contact.svg" alt="CONTACT US お問い合わせ ご質問やご相談などお気軽にお問い合わせください。">
				</div>
				<div class="btn fade">
					<a href="tel:0969225184">
						<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/foot__tel.svg" alt="tel. 0969-22-5184">
					</a>
				</div>
			</div>
		</div>
		<div class="footer_menu">
			<div class="wrap">
				<div class="logo">
					<a href="<?= esc_url(home_url()); ?>">
						<img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/logo.png" alt="AGRIARTS">
					</a>
				</div>
				<div class="m__1">
					<div class="title"><a href="<?= esc_url(home_url('/overview/')); ?>">会社概要</a></div>
					<div class="txt">
						<a href="<?= esc_url(home_url('/overview/#philosophy')); ?>">企業理念</a><br>
						<a href="<?= esc_url(home_url('/overview/#message')); ?>">社長挨拶</a><br>
						<a href="<?= esc_url(home_url('/overview/#profile')); ?>">会社概要</a><br>
						<a href="<?= esc_url(home_url('/overview/#history')); ?>">沿革</a>
					</div>
					<div class="tit_u"><a href="<?= esc_url(home_url('/news/')); ?>">ニュース</a></div>
				</div>
				<div class="m__1">
					<div class="title"><a href="<?= esc_url(home_url('/projects/')); ?>">事業案内</a></div>
					<div class="txt">
						<a href="<?= esc_url(home_url('/projects/#sales')); ?>">農業資材販売</a><br>
						<a href="<?= esc_url(home_url('/projects/#vinyl')); ?>">ハウス用ビニール加工</a><br>
						<a href="<?= esc_url(home_url('/projects/#agri')); ?>">青果生産</a><br>
						<a href="<?= esc_url(home_url('/projects/#flower')); ?>">花卉販売</a><br>
						<a href="<?= esc_url(home_url('/projects/#ec')); ?>">EC販売</a><br>
						<a href="<?= esc_url(home_url('/projects/#admin')); ?>">販売事務</a>
					</div>
				</div>
				<div class="m__1">
					<div class="title"><a href="<?= esc_url(home_url('/access/')); ?>">アクセス</a></div>
					<div class="txt">
						<a href="<?= esc_url(home_url('/access/#headoffice')); ?>">本社・フラワートレイル</a><br>
						<a href="<?= esc_url(home_url('/access/#ooyano')); ?>">大矢野店</a><br>
						<a href="<?= esc_url(home_url('/access/#plant')); ?>">加工場</a>
					</div>
					<div class="tit_u"><a href="<?= esc_url(home_url('/recruit/')); ?>">採用情報</a></div>
					<div class="txt">
						<a href="<?= esc_url(home_url('/recruit/#interview')); ?>">インタビュー</a><br>
						<a href="<?= esc_url(home_url('/recruit/#details')); ?>">募集要項</a><br>
						<a href="<?= esc_url(home_url('/recruit/#inquiry')); ?>">お問い合わせ</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_copy">
			<div class="inner">
				Copyright AGRIARTS, Inc. 2023
			</div>
		</div>
	</footer>
</body>
</html>