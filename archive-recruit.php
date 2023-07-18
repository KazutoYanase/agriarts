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
            採用情報
        </div>
        <div class="eng">
            Recruit
        </div>
    </div>
    <div class="pjt_submenu">
        <a href="#sales">
            <div>
                フィールドアドバイザー
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
        <a href="#details">
            <div>
                募集要項
            </div>
        </a>
        <a href="#inquiry">
            <div>
                お問い合わせ
            </div>
        </a>
    </div>
    <div class="pjt_spmenu sp_block">
        <a href="#sales">
            <div>
                フィールドアドバイザー
            </div>
        </a>
        <a href="#vinyl">
            <div>
                ハウス用ビニール加工
            </div>
        </a>
    </div>
    <div class="pjt_spmenu sp_block">
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
        <a href="#details">
            <div>
                募集要項
            </div>
        </a>
        <a href="#inquiry">
            <div>
                お問い合わせ
            </div>
        </a>
    </div>
</div>

<!-- ページヘッダー -->
<div class="pjt_box">
    <div class="title_wrap">
        <div class="bar rec_bg">
        </div>
    </div>
</div>

<div class="rec__copy">
    <div class="main_copy">
        農業の未来を創るために<br>
        天草で働きませんか
    </div>
    <div class="lead_copy fade">
        アグリ・アーツでは<br class="sp_inline">一緒に働く仲間を募集しています。
    </div>
    <div class="body_copy fade">
        アグリ・アーツは<br class="sp_inline">熊本県天草市を本拠地として、<br>
        天草・熊本・九州一円で農業資材販売・<br class="sp_inline">ハウス用ビニール加工・青果生産・花卉販売の<br class="sp_inline">事業を展開しています。<br>
        私たちは、農業の未来を担う人たちと一緒に働き、<br class="sp_inline">地域の農業を支えることを目指しています。<br>
        アグリ・アーツでは、<br class="sp_inline">従来の伝統的な手法を大切にするとともに、<br>
        新しい技術やアイデアを積極的に取り入れ、<br class="sp_inline">常に最先端の情報にアンテナを張っています。<br>
        また、当社では、社員一人ひとりが会社を支え、<br class="sp_inline">農業の未来を担う大切な存在だと考えています。<br>
        社員のアイデアや意見に耳を傾け、<br class="sp_inline">誰もが意見を出すことのできる組織でありたい。<br>
        そんな職場環境づくりを目指しています。
    </div>
</div>

<!-- スライダー -->
<div class="rec__slider">
    <div class="slick_01">
        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli01.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli02.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli03.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli04.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli05.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli06.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli07.jpg" alt="">
        </div>

        <div class="top_slider_panel mgn_top">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__sli08.jpg" alt="">
        </div>
    </div>
</div>
<!-- インタビュー -->
<div class="rec__inter" id="interview">
    <div class="tit_wrap">
        <div class="copy">
            インタビュー
        </div>
        <div class="eng">
            Interview
        </div>
    </div>
    <div class="job_tit" id="sales">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__01_a.jpg" alt=""></div>
        <div class="txt">
            <div class="jpn">フィールドアドバイザー</div>
            <div class="eng">Field Advisor</div>
        </div>
    </div>
    <div class="name_wrap fade">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__01_b.jpg" alt=""></div>
        <div class="box">
            <div class="name">舩本 詠二</div>
            <div class="spec">営業部／2009年入社</div>
        </div>
    </div>
    <div class="txt_box">
        <div class="copy">
            <div class="catch">
                農家さんのお役立てるよう<br>
                たくさんのコミュニケーションを
            </div>
            <div class="body_txt">
                前職は自動車製造業でしたが、地元である天草に戻りたかった意向もあってアグリ・アーツに入社しました。入社後の数年は生花販売や本店販売部の店長等を勤めていましたが、周囲からの勧めがあり、今は営業の仕事をしています。営業は顧客である農家さんに伺い注文を請けたり、商品を届けたりするのが主な仕事ですが、実際にはそれ以上に大切にしていることがあります。それは農家さんとコミュニケーションをたくさん取ることです。近隣の農家さんの状況や対策を伝えたり、最新のトレンド動向を伝える中で、その農家さんの悩みを伺い解決するお手伝いをすることができるからです。また情報だけでなく、実際にビニールハウスの張り替え等の農家さんのお手伝いをしたり、逆に生産物をお土産に頂いたり、そうしたやり取りの１つ１つが信頼関係を築き、お互いの笑顔を生んでいると思います。
            </div>
        </div>
        <div class="ph fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__01_c.jpg" alt=""></div>
    </div>
    <div class="txt_box fle_rev">
        <div class="copy">
            <div class="body_txt">
                そうしているとお客さまである農家さんのことが自分事に思えてきて、そうなると尚更「少しでも農家さんの収量が上がるように、青果の品質が上がるように、何か少しでもお役に立てるよう」にと自然にそういう想いが湧き出てきます。<br>
                それが伝わっていったのか、２年前に担当になった三角地区では、担当した当初お客さまは１件だけでしたが、今では２０件以上の農家さんがお取引をしてくださっています。それもこれもそれぞれの農家さんとの信頼関係があってこそのことだと思いますので、性急にお取引先を増やすのではなく、それぞれの農家さんに丁寧に向き合い、一緒に悩み考え、そして喜び、今後とも末永いお付き合いをさせて頂きたいと考えています。
            </div>
        </div>
        <div class="ph fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__01_d.jpg" alt=""></div>
    </div>
</div>

<div class="rec__inter">
    <div class="job_tit" id="vinyl">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__02_a.jpg" alt=""></div>
        <div class="txt">
            <div class="jpn">ハウス用ビニール加工</div>
            <div class="eng">Vinyl Machining for Greenhouse</div>
        </div>
    </div>
    <div class="name_wrap fade">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__02_b.jpg" alt=""></div>
        <div class="box">
            <div class="name">長井 照憲</div>
            <div class="spec">ビニール加工場／2019年入社</div>
        </div>
    </div>
    <div class="txt_box">
        <div class="copy">
            <div class="catch">
                先輩社員の丁寧な指導で<br>
                不慣れな作業もできるように
            </div>
            <div class="body_txt">
                前職は農業資材会社のFRPハウスの加工場に勤めており、その経験が活かせればと思い現職に就くことになりました。現在は加工場でPO加工、フォークリフトを使った原反の入れ替え、原反の接ぎ作業等を担当しています。同業種からの転職でしたが、扱う素材がまったく異なるために入社当初は慣れないこともありました。特にPOは素材の種類が多く、素材に合わせて対応することが難しい部分もありました。ですが、そんな時は先輩社員の方々が丁寧にご指導頂いたことで色々な作業ができるようになり、嬉しく思うと同時に仕事のやり甲斐にもなっていると思います。加工場での作業は1人で出来ないものが多くチームワークが大切ですが、普段から休憩中や終業後に先輩社員の方々と肩肘張らない会話をして仲良くして頂いているので、円滑に仕事ができています。これからも安全に気をつけながら、よりスムーズに仕事ができるようにしていきたいと思っています。
            </div>
        </div>
        <div class="ph fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__02_c.jpg" alt=""></div>
    </div>
</div>

<div class="rec__inter">
    <div class="job_tit" id="agri">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__03_a.jpg" alt=""></div>
        <div class="txt">
            <div class="jpn">青果生産</div>
            <div class="eng">Agricultural Production</div>
        </div>
    </div>
    <div class="name_wrap fade">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__03_b.jpg" alt=""></div>
        <div class="box">
            <div class="name">山田 朋文</div>
            <div class="spec">施設園芸部／2016年入社</div>
        </div>
    </div>
    <div class="txt_box">
        <div class="copy">
            <div class="catch">
                年間通して安定した<br>
                生産管理を目指して
            </div>
            <div class="body_txt">
                もともと天草出身でしたが、熊本の大学を卒業後、鹿児島で観光業に就いていました。ですが、前々から農業に興味があり、自然に携わる仕事がしたいと思っていたことと、天草に帰りたいとの想いからアグリ・アーツに入社し現在の職を勤めています。現在はトマト・各種苗・キクラゲの栽培を担当しています。トマトの生育管理において一番気をつけているのは幹の太さです。１年間の長期に渡り実を収穫するためには太い幹に育てないといけません。数年前にようやく年間通して大きな失敗なく生育管理できたときは感慨深いものがありました。今後はアグリ・アーツがより良い農業法人となることはもちろんのこと、周囲の農家さんの助けにもなるような存在になりたいと思っています。あと将来的にはアボガドの栽培にも取り組んでみたいと思っていて、目下色々とチャレンジしている最中です。
            </div>
        </div>
        <div class="ph fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__03_c.jpg" alt=""></div>
    </div>
</div>

<div class="rec__inter">
    <div class="job_tit" id="flower">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__04_a.jpg" alt=""></div>
        <div class="txt">
            <div class="jpn">花卉販売</div>
            <div class="eng">Flower Sales</div>
        </div>
    </div>
    <div class="name_wrap fade">
        <div class="ph"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__04_b.jpg" alt=""></div>
        <div class="box">
            <div class="name">新納 悦子</div>
            <div class="spec">生花部／2022年入社</div>
        </div>
    </div>
    <div class="txt_box">
        <div class="copy">
            <div class="catch">
                未経験からのチャレンジ<br>
                好きなことを仕事に
            </div>
            <div class="body_txt">
                昔からお花や植物が好きで自分で育てたりするなかで、フラワートレイルが「とても可愛いお店だな」と思っていて、前から知っていました。そんなところに求人が出ていることを知り、未経験でしたが採用していただけました。現在は生花アレンジの勉強をしながら、キャンドルやシュシュを作って販売したり、店長のアシスタントを務めたりしています。まだ経験が浅いので毎日が勉強で、特にお花の名前を覚えるのが大変です。例えばバラであれば、バラの中での品種が数多くあったり、さらにその名前が横文字で長かったりと、この仕事に就いてみないと分からないことが多々あります。ですが、折角自分の好きなことでお仕事をさせていただいてるので、今後もお花や植物の勉強をして詳しくなったり、綺麗なフラワーアレンジを作れるようになることが今の目標です。
            </div>
        </div>
        <div class="ph fade"><img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/rec__04_c.jpg" alt=""></div>
    </div>
</div>
<!-- 募集要項 -->
<div class="details__wrap">
    <div class="tit_box" id="details">
        <div class="jpn">募集要項</div>
        <div class="eng">Details</div>
    </div>
    <div class="table_wrap">
        
        <?php
        $args = array(
            'post_type' => 'recruit',
            'posts_per_page' => -1, // すべての投稿を表示
        );
        $recruit_query = new WP_Query($args);
        
        if ($recruit_query->have_posts()) {
            while ($recruit_query->have_posts()) {
                $recruit_query->the_post();
                $rec_kind = get_post_meta(get_the_ID(), 'rec_kind', true);
                $rec_type = get_post_meta(get_the_ID(), 'rec_type', true);
                $rec_body = get_post_meta(get_the_ID(), 'rec_body', true);
                $rec_salary = get_post_meta(get_the_ID(), 'rec_salary', true);
                $rec_teate = get_post_meta(get_the_ID(), 'rec_teate', true);
                $rec_bonus = get_post_meta(get_the_ID(), 'rec_bonus', true);
                $rec_upsalary = get_post_meta(get_the_ID(), 'rec_upsalary', true);
                $rec_holiday = get_post_meta(get_the_ID(), 'rec_holiday', true);
                $rec_benefits = get_post_meta(get_the_ID(), 'rec_benefits', true);
                // 改行コードをHTMLの改行タグに変換
                $rec_body = nl2br($rec_body);
                $rec_salary = nl2br($rec_salary);
                $rec_teate = nl2br($rec_teate);
                $rec_bonus = nl2br($rec_bonus);
                $rec_upsalary = nl2br($rec_upsalary);
                $rec_holiday = nl2br($rec_holiday);
                $rec_benefits = nl2br($rec_benefits);
        ?>
        
        <table>
            <tbody>
                <?php if (!empty($rec_kind)) : ?>
                <tr class="topline fade">
                    <th>職種</th>
                    <td><?= $rec_kind; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_type)) : ?>
                <tr class="fade">
                    <th>雇用形態</th>
                    <td><?= $rec_type; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_body)) : ?>
                <tr class="fade">
                    <th>仕事内容</th>
                    <td><?= $rec_body; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_salary)) : ?>
                <tr class="fade">
                    <th>給与</th>
                    <td><?= $rec_salary; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_teate)) : ?>
                <tr class="fade">
                    <th>諸手当</th>
                    <td><?= $rec_teate; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_bonus)) : ?>
                <tr class="fade">
                    <th>賞与</th>
                    <td><?= $rec_bonus; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_upsalary)) : ?>
                <tr class="fade">
                    <th>昇給</th>
                    <td><?= $rec_upsalary; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_holiday)) : ?>
                <tr class="fade">
                    <th>休日休暇</th>
                    <td><?= $rec_holiday; ?></td>
                </tr>
                <?php endif; ?>
                <?php if (!empty($rec_benefits)) : ?>
                <tr class="fade">
                    <th>福利厚生 </th>
                    <td><?= $rec_benefits; ?></td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <?php
            }
            wp_reset_postdata();
        } else {
            echo "<p>現在、募集中の職種はありません。</p>";
        }
        ?>
        
    </div>
</div>
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