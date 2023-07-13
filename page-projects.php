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
            事業案内
        </div>
        <div class="eng">
            Projects
        </div>
    </div>
    <div class="pjt_submenu">
        <a href="#sales">
            <div>
                農業資材販売
            </div>
        </a>
        <a href="#vinyl">
            <div>
                ハウス用ビニール加工
            </div>
        </a>
        <a href="#agri">
            <div>
                青果生産
            </div>
        </a>
        <a href="#flower">
            <div>
                花卉販売
            </div>
        </a>
        <a href="#ec">
            <div>
                EC販売
            </div>
        </a>
        <a href="#admin">
            <div>
                営業事務
            </div>
        </a>
    </div>
    <div class="pjt_spmenu sp_block">
        <a href="#sales">
            <div>
                農業資材販売
            </div>
        </a>
        <a href="#vinyl">
            <div>
                ハウス用ビニール加工
            </div>
        </a>
        <a href="#agri">
            <div>
                青果生産
            </div>
        </a>
    </div>
    <div class="pjt_spmenu sp_block">
        <a href="#flower">
            <div>
                花卉販売
            </div>
        </a>
        <a href="#ec">
            <div>
                EC販売
            </div>
        </a>
        <a href="#admin">
            <div>
                営業事務
            </div>
        </a>
    </div>
</div>

<!-- 01農業資材販売 -->
<div class="pjt_box" id="sales">
    <div class="title_wrap">
        <div class="bar_left sales_bg">
            <div class="name">
                <div class="jpn">農業資材販売</div>
                <div class="eng">Agricultural Material Sales</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        種苗から大型ビニールハウスまで<br>
        なんでも揃う農業資材の総合商社
    </div>
    <div class="sales_box">
        <div class="sales_txt">
            <div class="name_jp">
                提案型営業販売
            </div>
            <div class="name_en">
                Proposal Selling
            </div>
            <div class="body_copy">
                　アグリー・アーツは、農家の方々に必要な農業資材を提供しお届けする提案型営業販売を九州一円をエリアとして行っています。当社では、種子や肥料、農薬、農業機械、ビニールハウスの設置・施工まで、農家の方々が必要とするありとあらゆる農業資材を取り扱っています。それらを最適な形で提案差し上げ、農家の方々が少しでも良い品質・高収量になるようなサポートができるような提案を私たちは目指しています。<br>
                　私たちは、農家の方々が高品質な農作物を生産できるように、最新の農業技術や研究結果、新商品や新しい栽培方法等の情報を提供することにも力を入れています。当社のスタッフは、農業に関する知識が豊富であり、お客様のニーズに合わせた最適な農業資材を提供するために尽力しています。また、私たちはお客様との信頼関係を大切にし、常にお客様の立場に立ったサービスを提供することを心がけています。私たちは、お客様のご要望に迅速かつ正確に対応することで、お客様の生産性向上に貢献することを目指しています。<br>
                　そして、私たちは商品を販売するだけでなく、地域の皆さまのお役に立ち、皆さまに愛され必要とされるような存在になっていきたいと思っています。
            </div>
        </div>
        <div class="sales_ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_01.jpg" alt="">
        </div>
    </div>
    <div class="sales_photo">
        <div class="sph_01 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_02.jpg" alt="">
        </div>
        <div class="sph_02 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_03.jpg" alt="">
        </div>
        <div class="sph_03">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_map.png" alt="">
        </div>
    </div>
    <div class="store">
        <div class="name_jp">
            店舗販売
        </div>
        <div class="name_en">
            Store Salling
        </div>
        <div class="inner">
            <div class="main_vis fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_04.jpg" alt="">
            </div>
            <div class="main_txt">
                <div class="copy">
                    　アグリ・アーツでは「みつのぶ農園」という店名にて農業資材の店舗販売を行っています。お店は天草市古川町と上天草市大矢野町にあり、創業当時より地元の皆さまにご愛顧頂いております。商品は種苗・肥料から各種農業資材や出荷のための梱包資材等を各種取り揃えてございます。店舗販売の特性上、お店がある近隣エリアの農家さんをはじめとするお客さまと顔を合わせ会話をしながら最適な商品をご案内しています。
                </div>
                <div class="ph fade">
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_06.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="sub_ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec1_05.jpg" alt="">
        </div>
    </div>
</div>
<!-- 02ハウス用ビニール加工 -->
<div class="pjt_box" id="vinyl">
    <div class="title_wrap">
        <div class="bar vinyl_bg">
            <div class="name">
                <div class="jpn">ハウス用ビニール加工</div>
                <div class="eng">Vinyl Machining for Greenhouse</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        １つとして同じものがない<br>
        ハウス用ビニールをつくる
    </div>
    <div class="vinyl_box">
        <div class="vinyl_txt">
            　農業用のビニールハウスは圃場の形や用途・仕様によって、１つ１つ素材も形状も異なり、すべてがオリジナルの仕様になります。新築のビニールハウスはもちろんのこと、張り替え用のビニールの加工も行なっています。POやポリ塩化ビニールの原反を裁断・継ぎ加工をして、ハウスに合わせた形に形成します。家庭用の小さめのものから、50メートルを超える大きなハウス用のものまで製造しています。
        </div>
        <div class="vinyl_ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_01.jpg" alt="">
        </div>
    </div>
    <div class="vinyl_photo">
        <div class="sph_01 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_02.jpg" alt="">
            <div class="cap">
                出来上がったビニールを張り替え現場で綺麗に開くことができるように折り畳むのは大変難しく、職人の技による部分が大きいと言えます。
            </div>
        </div>
        <div class="sph_02 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_03.jpg" alt="">
            <div class="cap">
                ビニールは指定されたサイズに従って長さを測りながら形成します。横幅が大きいものについては横方向に継いで作ります。
            </div>
        </div>
    </div>
    <div class="slick_01">
        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli01.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli02.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli03.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli04.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli05.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli06.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli07.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec2_sli08.jpg" alt="">
        </div>
    </div>
</div>
<!-- 03青果生産 -->
<div class="pjt_box" id="agri">
    <div class="title_wrap">
        <div class="bar_left agri_bg">
            <div class="name">
                <div class="jpn">青果生産</div>
                <div class="eng">Agricultural Production</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        天草と空と海が育んだ<br>
        土壌で作る野菜
    </div>
    <div class="agri_box">
        <div class="inner">
            <div class="txt">
                　アグリ・アーツは熊本県天草市を本拠地としています。天草といえば高い空と青い海、そしてそこからもたらされる肥沃な大地。その天草の地でアグリ・アーツは青果生産を行なっています。主な生産品は各種野菜苗とミニトマトです。また近年はキクラゲの生産をはじめたり、有機米の生産にも取り組んでいます。
            </div>
            <div class="ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec3_01.jpg" alt="">
            </div>
        </div>
        <div class="ph_box mgn_b fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec3_02.jpg" alt="">
            <div class="cap">
                野菜苗は「じゃがいも」「さつまいも」「タマネギ」を中心に育てています。それらの苗はアグリ・アーツが持つチャネルにて販売しております。
            </div>
        </div>
        <div class="ph_box mgn_b mgn_l fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec3_03.jpg" alt="">
            <div class="cap">
                御領小学校跡地に建てられた巨大なビニールハウス内にて、様々な色や種類のミニトマトを生産しています。
            </div>
        </div>
        <div class="ph_box fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec3_04.jpg" alt="">
            <div class="cap">
                近年はキクラゲの生産に取り組んでおり、生産体制を整えています。
            </div>
        </div>
    </div>
</div>
<!-- 04花卉販売 -->
<div class="pjt_box" id="flower">
    <div class="title_wrap">
        <div class="bar flower_bg">
            <div class="name">
                <div class="jpn">花卉販売</div>
                <div class="eng">Flower Sales</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        花につつまれた<br>
        空間を作る
    </div>
    <div class="flower_box">
        <div class="txt">
            <div class="body_copy">
                　FLOWER TRAILでは生花・ドライフラワー・ブリーザーブドフラワー等のお花を用いて、花束・アレンジ・生花スタンド・冠婚葬祭等の各種催事用フラワーアレンジ等をご予算、ご希望に応じて承っております。<br>
                花束やブーケ、各種アレンジや色々なお花を用いたアイテムを通じて、花や植物をもっと身近に感じ、日々の暮らしに取り入れていただけると幸いです。
            </div>
        </div>
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_01.jpg" alt="">
        </div>
    </div>
    <div class="flower_photo">
        <div class="sph_01 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_02.jpg" alt="">
        </div>
        <div class="sph_02 fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_03.jpg" alt="">
        </div>
    </div>
    <div class="slick_01">
        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli01.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli02.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli03.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli04.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli05.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli06.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli07.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec4_sli08.jpg" alt="">
        </div>
    </div>
</div>
<!-- 05EC販売 -->
<div class="pjt_box" id="ec">
    <div class="title_wrap">
        <div class="bar_left ec_bg">
            <div class="name">
                <div class="jpn">EC販売</div>
                <div class="eng">E-Commerce</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        日本全国<br>
        いつでもどこでも
    </div>
    <div class="ec_wrap">
        <div class="txt_box">
            <div class="copy">
                　アグリ・アーツではインターネット販売も行なっています。24時間いつでもどこでも注文ができ、全国どこへでも配送が可能です。商品の主力は種苗となっており、当社で育てた苗も数多く出品しております。その他にも長年の経験と農協の最新情報を織り交ぜてセレクトした各種農業用品・資材も出品しております。
            </div>
            <div class="btn">
                <a href="http://www.mitsunobu-nouen.com" target="_blank" rel=”noopener noreferrer”>
                    <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec5_01.svg" alt="みつのぶ農園ECサイト http://www.mitsunobu-nouen.com">
                </a>
            </div>
        </div>
        <div class="ph_box pc_block fade">
            <a href="http://www.mitsunobu-nouen.com" target="_blank" rel=”noopener noreferrer”>
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec5_02.jpg" alt="">
            </a>
        </div>
    </div>
</div>
<!-- 06販売事務 -->
<div class="pjt_box" id="admin">
    <div class="title_wrap">
        <div class="bar admin_bg">
            <div class="name">
                <div class="jpn">販売事務</div>
                <div class="eng">Sales Administration</div>
            </div>
        </div>
    </div>
    <div class="catch_copy fade">
        欠かすことができない<br>
        後方支援
    </div>
    <div class="admin_box">
        <div class="txt">
            　販売事務は農業資材販売・ハウス用ビニール加工・青果生産・花卉販売・EC販売のすべての管理をしています。随時データを集計し、それを的確に分析して、現場に正確なフィードバックを提供しています。その他にも顧客データの管理や営業プロセスの効率化、高度なセキュリティ対策によるデータの保護等の活動の基盤となる幅広い業務を担当しています。販売事務はすべての現場にとって欠かすことのできない後方支援です。
        </div>
        <div class="ph fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/pjt__sec6_01.jpg" alt="">
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_01').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplaySpeed: 0, //オートプレイの切り替わり時間
            speed: 20000,
            accessibility: false,
            arrows: false,
            draggable: false,
            pauseOnHover: false,
            dots: false,
            fade: false,
            cssEase: 'linear',
            responsive: [{
                breakpoint: 800, // 799px以下のサイズに適用
                settings: {
                    slidesToShow: 2,
                },
            }, ],
        });
    });
</script>


<?php get_footer(); ?>