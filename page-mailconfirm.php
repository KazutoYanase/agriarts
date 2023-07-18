<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AGRI ATRS
 */

get_header(); ?>

<!-- お問い合わせ -->
<div class="inquiry__wrap" id="inquiry">
    <div class="tit_box">
        <div class="jpn">採用に関するお問い合わせ</div>
        <div class="eng">Inquiry</div>
    </div>
    <div class="formwrap">
        <?php echo do_shortcode('[mwform_formkey key="142"]'); ?>
    </div>
</div>


<?php get_footer(); ?>