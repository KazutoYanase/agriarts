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


<!-- ページヘッダー -->
<div class="top_logo_sp sp_block">
    <img alt="株式会社アグリアーツ" src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/logo.png">
</div>
<div class="page_header">
    <div class="txt">
        <div class="tit">
            アクセス
        </div>
        <div class="eng">
            Access
        </div>
    </div>
    <div class="acc_header">
    </div>
</div>

<!-- 企業理念 -->
<div class="map_wrap" id="headoffice">
    <div class="title">
        <div class="jpn">
            本社・フラワートレイル
        </div>
        <div class="eng">
            Headquarters・FlowerTrail
        </div>
    </div>
    <div class="txt">
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/acc__01.jpg" alt="本社・フラワートレイル">
        </div>
        <table>
            <tbody>
                <tr class="fade">
                    <th>住所</th>
                    <td>
                        〒863-0025<br>
                        熊本県天草市古川町１１番７号
                    </td>
                </tr>
                <tr class="fade">
                    <th>電話番号</th>
                    <td>
                        0969-22-5184
                    </td>
                </tr>
                <tr class="fade">
                    <th>営業時間</th>
                    <td>
                        09：00〜17：00
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="map_box mgn_btm">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.709953058068!2d130.1834380769171!3d32.45369757380028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353fef001cc0b7b9%3A0x61b040d1c9124547!2z44CSODYzLTAwMjUg54aK5pys55yM5aSp6I2J5biC5Y-k5bed55S677yR77yR4oiS77yX!5e0!3m2!1sja!2sjp!4v1686553659249!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="map_wrap" id="ooyano">
    <div class="title">
        <div class="jpn">
            大矢野店
        </div>
        <div class="eng">
            Ooyano Branch
        </div>
    </div>
    <div class="txt">
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/acc__02.jpg" alt="大矢野店">
        </div>
        <table>
            <tbody>
                <tr class="fade">
                    <th>住所</th>
                    <td>
                        〒869-3602<br>
                        熊本県上天草市大矢野町上1530-3
                    </td>
                </tr>
                <tr class="fade">
                    <th>電話番号</th>
                    <td>
                        0964-56-6602
                    </td>
                </tr>
                <tr class="fade">
                    <th>営業時間</th>
                    <td>
                        09：00〜17：00
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="map_box mgn_btm">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3361.7065462254527!2d130.4273339769206!3d32.587349373743514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354076556798b369%3A0x14c90a5f609c282!2z44CSODY5LTM2MDIg54aK5pys55yM5LiK5aSp6I2J5biC5aSn55-i6YeO55S65LiK77yR77yV77yT77yQ4oiS77yT!5e0!3m2!1sja!2sjp!4v1686553705714!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<div class="map_wrap" id="plant">
    <div class="title">
        <div class="jpn">
            加工場
        </div>
        <div class="eng">
            Machining Plant
        </div>
    </div>
    <div class="txt">
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/acc__03.jpg" alt="加工場">
        </div>
        <table>
            <tbody>
                <tr class="fade">
                    <th>住所</th>
                    <td>
                        〒869-0634<br>
                        熊本県宇城市小川町住吉293-1
                    </td>
                </tr>
                <tr class="fade">
                    <th>電話番号</th>
                    <td>
                        0964-43-3966
                    </td>
                </tr>
                <tr class="fade">
                    <th>営業時間</th>
                    <td>
                        09：00〜17：00
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="map_box mgn_btm">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3361.1103562797193!2d130.67136927692115!3d32.60324237373666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f50!3m3!1m2!1s0x354087d4e9a3ddfd%3A0x89d45754cd9fc495!2z44CSODY5LTA2MzQg54aK5pys55yM5a6H5Z-O5biC5bCP5bed55S65L2P5ZCJ77yS77yZ77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1686553754965!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<?php get_footer(); ?>