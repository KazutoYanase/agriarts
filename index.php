<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package AGRI ATRS
 */

get_header(); ?>


        <!-- スライダー -->
        <div id="top_slider_wrap">
            <div class="slick_01">
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider01.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp01.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider02.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp02.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider03.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp03.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider04.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp04.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider05.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp05.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider06.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp06.jpg" alt="">
                    </div>
                </div>
        
                <div class="top_slider_pnl">
                    <div class="top_slider_ph pc_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slider07.jpg" alt="">
                    </div>
                    <div class="top_slider_ph sp_inline">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__slide_sp07.jpg" alt="">
                    </div>
                </div>
            </div>
        
            <h2 class="top_msg pc_block">
                <div class="box">農業の明るい未来を</div>
                <div class="box">創造する</div>
            </h2>
            <div class="top_logo_smf sp_block">
                <img alt="株式会社アグリアーツ" src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/logo.png">
            </div>
        </div>
        <!-- メッセージ -->
        <div class="top__message">
            <div class="main_txt">
                創業117年アグリ・アーツ（光延農園）は<br>
                農業の総合会社として<br>
                農に携わるあらゆる方々と共に<br>
                農業発展のお手伝いをしてきました。<br>
                <br>
                「日本の食を支える農業の新しい未来を<br class="sp_inline">共に創り上げていく」<br>
                <br>
                「地球温暖化」「生物多様性」「地方創生」等<br>
                国内外の抱えるさまざまな問題を<br>
                自然・地域・農家さんに寄り添い<br>
                持続可能な社会を目指して<br>
                その営み中で解決していく。<br>
                そんな、お客様に信頼されるパートナーを<br class="sp_inline">目指してまいります。
            </div>
            <div class="img__1 fade_left">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__msg01.jpg" alt="">
            </div>
            <div class="img__2 fade_right">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__msg02.jpg" alt="">
            </div>
            <div class="img__3 fade_left">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__msg03.jpg" alt="">
            </div>
            <div class="img__4 fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__msg04.svg" alt="">
            </div>
        </div>
        
        <!-- 会社概要 -->
        <div class="top_overview">
            <h2 class="title">
                <div class="top">会社概要</div>
                <div class="btm">Overview</div>
            </h2>
            <div class="inner">
                <div class="ph">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__over01.jpg" alt="">
                </div>
                <div class="copy">
                    <div class="ttl fade">
                        農業の明るい未来を創造する
                    </div>
                    <div class="txt fade">
                        昭和２年の創業以来、天草を基盤として農業の発展のお手伝いをしてきたアグリ・アーツは「農業の明るい未来を創造する」をテーマに、よりお客様に信頼されるパートナーを目指していまいります。
                    </div>
                    <a href="<?= esc_url(home_url('/overview/')); ?>">
                        <div class="btn">
                            more →
                        </div>
                    </a>
                </div>
            </div>
            <div class="wrap">
                <a href="<?= esc_url(home_url('/overview/#philosophy')); ?>">
                    <div class="maru fade">
                        <div>企業理念</div>
                    </div>
                </a>
                <a href="<?= esc_url(home_url('/overview/#message')); ?>">
                    <div class="maru fade">
                        <div>社長挨拶</div>
                    </div>
                </a>
                <a href="<?= esc_url(home_url('/overview/#profile')); ?>">
                    <div class="maru fade">
                        <div>企業概要</div>
                    </div>
                </a>
                <a href="<?= esc_url(home_url('/overview/#history')); ?>">
                    <div class="maru fade">
                        <div>沿革</div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- ニュース -->
        <div class="top_news">
            <h2 class="title">
                <div class="top">ニュース</div>
                <div class="btm">News</div>
            </h2>
            <div class="inner">
                    
                <?php 
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => '3'
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post(); // ループ内で記事のデータを取得
                    ?>
                        <div class="report">
                            <div class="wrapper fade">
                                <div class="date"><?= esc_html(get_post_time("Y.m.d")); ?></div>
                            </div>
                            <div class="ttl fade">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                <div class="toarchive">
                    <a href="<?= esc_url(home_url('/news/')); ?>">ニュース一覧へ →</a>
                </div>
        
            </div>
        </div>
        
        <!-- 事業案内 -->
        <div class="top_projects">
            <h2 class="title">
                <div class="top">事業案内</div>
                <div class="btm">Projects</div>
            </h2>
            <div class="inner">
                <div class="wrapper w_mgn_btm">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt01.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#sales')); ?>">
                        <div class="panel p_right">
                            <div class="lead">
                                01 - Agricultural Material Sales
                            </div>
                            <div class="num">
                                事業案内①
                            </div>
                            <div class="tit">
                                農業資材販売
                            </div>
                            <div class="txt">
                                営業・店舗・ECの各チャネルを通して、種苗・肥料から農機具やビニールハウスの建設までありとあらゆる農業資材を販売しています。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                    <a href="<?= esc_url(home_url('/recruit/#sales')); ?>">
                        <div class="is_btn_l fade_right">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt01_is.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="wrapper w_mgn_btm">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt02.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#vinyl')); ?>">
                        <div class="panel p_left">
                            <div class="lead">
                                02 - Vinyl Machining for Greenhouse
                            </div>
                            <div class="num">
                                事業案内②
                            </div>
                            <div class="tit">
                                ハウス用ビニール加工
                            </div>
                            <div class="txt">
                                農業用ビニールハウスのビニールを加工しています。１つ１つ異なる形・大きさのビニールハウスに合わせて新築用・張り替え用のビニールを作ります。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                    <a href="<?= esc_url(home_url('/recruit/#vinyl')); ?>">
                        <div class="is_btn_r fade_right">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt02_is.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="wrapper w_mgn_btm">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt03.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#agri')); ?>">
                        <div class="panel p_right">
                            <div class="lead">
                                03 - Agricultural Production
                            </div>
                            <div class="num">
                                事業案内③
                            </div>
                            <div class="tit">
                                青果生産
                            </div>
                            <div class="txt">
                                各種苗類・ミニトマト・キクラゲ等の青果を生産しています。天草の空と海に育まれた土壌によって、とても美味しい青果を育てています。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                    <a href="<?= esc_url(home_url('/recruit/#agri')); ?>">
                        <div class="is_btn_l fade_right">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt03_is.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="wrapper w_mgn_btm">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt04.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#flower')); ?>">
                        <div class="panel p_left">
                            <div class="lead">
                                04 - Flower Sales
                            </div>
                            <div class="num">
                                事業案内④
                            </div>
                            <div class="tit">
                                花卉販売
                            </div>
                            <div class="txt">
                                生花やドライフラワーを使った花束や各種フラワーアレンジメントから結婚式等の大きなイベントの装飾まで承っております。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                    <a href="<?= esc_url(home_url('/recruit/#flower')); ?>">
                        <div class="is_btn_r fade_right">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt04_is.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="wrapper w_mgn_btm">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt05.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#ec')); ?>">
                        <div class="panel p_right">
                            <div class="lead">
                                05 - E-Commerce
                            </div>
                            <div class="num">
                                事業案内⑤
                            </div>
                            <div class="tit">
                                EC販売
                            </div>
                            <div class="txt">
                                EC販売でいつでもどこでも日本全国にアグリ・アーツの商品をお届けしています。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                </div>
                <div class="wrapper">
                    <div class="mainvis fade">
                        <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/top__pjt06.jpg" alt="">
                    </div>
                    <a href="<?= esc_url(home_url('/projects/#admin')); ?>">
                        <div class="panel p_left">
                            <div class="lead">
                                06 - Sales Administration
                            </div>
                            <div class="num">
                                事業案内⑥
                            </div>
                            <div class="tit">
                                販売事務
                            </div>
                            <div class="txt">
                                販売事務は、すべての現場にとって欠かすことのできない後方支援です。
                            </div>
                            <div class="btn">
                                View More →
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- 採用 -->
        <div class="top_recruit">
            <h2 class="title">
                <div class="top">採用情報</div>
                <div class="btm">Recruit</div>
            </h2>
            <div class="inner">
                <div class="copy">
                    農業の未来を創るために<br>
                    天草で働きませんか
                </div>
                <div class="txt">
                    アグリ・アーツでは<br class="sp_inline">一緒に働く仲間を募集しています。<br>
                    私たちは、農業の未来を担う人たちと一緒に働き、<br class="sp_inline">地域の農業を支えることを目指しています。<br>
                    社員のアイデアや意見に耳を傾け、<br class="sp_inline">誰もが意見を出すことのできる組織でありたい。<br>
                    そんな職場環境づくりを目指しています。
                </div>
                <div class="btn_wrap">
                    <a href="<?= esc_url(home_url('/recruit/#sales')); ?>">
                        <div class="img fade_left">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__01_a.jpg" alt="">
                        </div>
                        <div class="pos">
                            フィールドアドバイザー<br>
                            <span>Field Advisor</span>
                        </div>
                    </a>
                </div>
                <div class="btn_wrap mgn_left">
                    <a href="<?= esc_url(home_url('/recruit/#vinyl')); ?>">
                        <div class="img fade_right">
                            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__02_a.jpg" alt="">
                        </div>
                        <div class="pos">
                            ハウス用ビニール加工<br>
                            <span>Fruits and Vegetables Production</span>
                        </div>
                    </a>
                </div>
                <div class="btn_flex">
                    <div class="box">
                        <a href="<?= esc_url(home_url('/recruit/#agri')); ?>">
                            <div class="img fade">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__03_a.jpg" alt="">
                            </div>
                            <div class="pos">
                                青果生産<br>
                                <span>Vegetables Production</span>
                            </div>
                        </a>
                    </div>
                    <div class="box mgn_top">
                        <a href="<?= esc_url(home_url('/recruit/#flower')); ?>">
                            <div class="img fade">
                                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__04_a.jpg" alt="">
                            </div>
                            <div class="pos">
                                花卉販売<br>
                                <span>Flower Sales</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- アクセス -->
        <div class="top_access">
            <h2 class="title">
                <div class="top">アクセス</div>
                <div class="btm">Access</div>
            </h2>
            <div class="map_outer">
                <div class="box fade">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.709953058068!2d130.1834380769171!3d32.45369757380028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353fef001cc0b7b9%3A0x61b040d1c9124547!2z44CSODYzLTAwMjUg54aK5pys55yM5aSp6I2J5biC5Y-k5bed55S677yR77yR4oiS77yX!5e0!3m2!1sja!2sjp!4v1686553659249!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="txt">
                        <div class="name">
                            本社・フラワートレイル
                        </div>
                        熊本県天草市古川町１１番７号
                        <a href="https://goo.gl/maps/TY4bTa2Gs8CPwNFV6" target="_blank">
                            <div class="btn">
                                Google Map →
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box fade">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3361.7065462254527!2d130.4273339769206!3d32.587349373743514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354076556798b369%3A0x14c90a5f609c282!2z44CSODY5LTM2MDIg54aK5pys55yM5LiK5aSp6I2J5biC5aSn55-i6YeO55S65LiK77yR77yV77yT77yQ4oiS77yT!5e0!3m2!1sja!2sjp!4v1686553705714!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="txt">
                        <div class="name">大矢野店</div>
                        熊本県上天草市大矢野町上1530-3
                        <a href="https://goo.gl/maps/BgHm9Q3B3HDrTNSZ9" target="_blank">
                            <div class="btn">
                                Google Map →
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box fade">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3361.1103562797193!2d130.67136927692115!3d32.60324237373666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354087d4e9a3ddfd%3A0x89d45754cd9fc495!2z44CSODY5LTA2MzQg54aK5pys55yM5a6H5Z-O5biC5bCP5bed55S65L2P5ZCJ77yS77yZ77yT4oiS77yR!5e0!3m2!1sja!2sjp!4v1686553754965!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="txt">
                        <div class="name">加工場</div>
                        熊本県宇城市小川町住吉293-1
                        <a href="https://goo.gl/maps/A3xLSVSwi9LrzRUe8" target="_blank">
                            <div class="btn">
                                Google Map →
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.slick_01').slick({
                    infinite: true, // 無限ループ
                    autoplay: true, //オートプレイ
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplaySpeed: 5000, //オートプレイの切り替わり時間
                    speed: 2000,
                    accessibility: false,
                    arrows: false,
                    draggable: false,
                    pauseOnHover: false,
                    dots: false,
                    fade: true,
                    cssEase: 'linear',
                });
            });
        </script>


<?php get_footer(); ?>