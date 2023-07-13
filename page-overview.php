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
            会社概要
        </div>
        <div class="eng">
            Overview
        </div>
    </div>
    <div class="over_header">
    </div>
</div>

<!-- 企業理念 -->
<div class="over_philosophy" id="philosophy">
    <div class="tit_wrap">
        <div class="copy">
            企業理念
        </div>
        <div class="eng">
            Philosophy
        </div>
    </div>
    <div class="txt_wrap">
        <div class="imgbox fade">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__philo.png" alt="">
        </div>
        <div class="txtbox">
            <div class="eyechach_a fade">
                Mission ＝ 企業理念
            </div>
            <div class="catch_copy_a fade">
                忘己利他
            </div>
            <div class="main_txt mgn_btm fade">
                天台宗の開祖 最澄の言葉に『己を忘れて他を利するは慈悲の極みなり』という言葉があります。ここから転じて「忘己利他」と言われるようになったそうです。その「自分のことは後にして、まず人に喜んで頂く行いをする。そこにこそ、真の幸せがある」という意味合いは、わたしたちアグリ・アーツの考えにも通じています。<br>
                <br>
                自分のためにではなく、目の前の誰かのために。そして、さらにそこにつながる次の誰かのために行動する。そしてその行動が次の行動へと連鎖していく。そんな循環を生み出す原動力になることを目指します。<br>
                <br>
                お客さまや農業、ひいては社会のために何を資することができるのか。そう自らに問い続けることが、わたしたちアグリ・アーツの使命です。
            </div>
            <div class="eyechach_b fade">
                Vision ＝ 経営方針
            </div>
            <div class="catch_copy_b fade">
                農業の明るい未来を創造する
            </div>
            <div class="main_txt mgn_btm fade">
                創業117年アグリ・アーツ（光延農園）は農業の総合会社として、農に携わるあらゆる方々と共に農業発展のお手伝いをしてきました。<br>
                <br>
                「日本の食を支える農業の新しい未来を共に創り上げていく」<br>
                <br>
                我々は、「地球温暖化」「生物多様性」「地方創生」等、国内外の抱えるさまざまな問題を、自然・地域・農家さんに寄り添い、持続可能な社会を目指して、その営み中で解決していく。<br>
                そんな、お客様に信頼されるパートナーを目指してまいります。
            </div>
            <div class="eyechach_c fade">
                Values ＝ 行動指針
            </div>
            <div class="catch_copy_c fade">
                アグリ・アーツの3Q<br class="sp_inline">（サンキュー）
            </div>
            <div class="main_txt fade">
                わたしたちアグリ・アーツのサービスや商品は、３つの「Q」に基づいています。「Quality」「Quantity」「Question」この３つを、お客さま届け、お客さまから「サンキュー」のお言葉をいただくことが、わたしたちのなによりもの原動力となっています。<br>
                <br>
                <span>① Quality<br></span>
                伝統的な手法はもちろん、今現在の時流・トレンド、最先端の技術等、さまざまな要因を鑑みた上で、最適な商品やサービスの開発に努めています。また、毎年変動する気候や環境に、すぐに対応できる長年の経験を持ち合わせているのもクオリティの一環です。<br>
                <br>
                <span>② Quantity<br></span>
                わたしたちアグリ・アーツは創業100年を超え、数多くのメーカーとの長年の取引実績があります。その信頼関係に基づき、アグリ・アーツは他社にはない圧倒的な品揃えがあります。その中から、それぞれのお客さまに最適なものをセレクトし、ご提案を差し上げることができることが特徴です。<br>
                <br>
                <span>③ Question<br></span>
                今わたしたちアグリ・アーツが取り扱っている商品・サービスが、本当にお客様が最良であるのか、常に問い続けています。気候や社会情勢が以前にない急激なスピードで変化する現在、お客さまからの御意見を真摯に受け止めることで、ニーズに合った商品・サービスを常に用意できるよう心がけています。
            </div>
        </div>
    </div>
</div>
<!-- 社長挨拶 -->
<div class="over_message" id="message">
    <div class="inner">
        <div class="tit_wrap">
            <div class="copy">
                社長挨拶
            </div>
            <div class="eng">
                Top Message
            </div>
        </div>
        <div class="txt_wrap">
            <div class="box_ph fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__mess.jpg" alt="">
            </div>
            <div class="box_txt">
                <div class="tit fade">
                    伝統と新たな可能性で<br>
                    農業の発展と未来を築く
                </div>
                <div class="copy fade">
                    日頃より当社の活動にご支援、ご愛顧いただき誠にありがとうございます。<br>
                    天草の地で創業以来９６年、農家さんと共に農業の発展に努めてまいりました。<br>
                    <br>
                    時代が移り変わり、平和な時代から混沌とする現在でも、「食の安全」「持続可能な農業」など、生きるために必要な食の重要性はいつの時代も変わることはありません。<br>
                    <br>
                    私たちの会社は、長年の経験や伝統的な手法を重んじながらも、農業の新たな可能性と革新を追求し、農家さんに寄り添い共に繁栄できるパートナーとして、農業業界の発展と未来を築いていける事をスタッフ一同楽しみしています。
                </div>
                <div class="name fade">
                    代表取締役　光延 啓人
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 企業概要 -->
<div class="over_profile" id="profile">
    <div class="tit_wrap">
        <div class="copy">
            企業概要
        </div>
        <div class="eng">
            Profile
        </div>
    </div>
    <div class="detail_wrap">
        <table>
            <tbody>
                <tr class="fade">
                    <th>法人名</th>
                    <td>株式会社アグリ・アーツ</td>
                </tr>
                <tr class="fade">
                    <th>代表取締役</th>
                    <td>
                        光延啓人
                    </td>
                </tr>
                <tr class="fade">
                    <th>設立年月日</th>
                    <td>
                        1967/06/29
                    </td>
                </tr>
                <tr class="fade">
                    <th>資本金</th>
                    <td>
                        1000万円
                    </td>
                </tr>
                <tr class="fade">
                    <th>本店</th>
                    <td>
                        〒863-0025 <br class="sp_inline">熊本県天草市古川町１１番７号
                    </td>
                </tr>
                <tr class="fade">
                    <th>大矢野店</th>
                    <td>
                        〒869-3602 <br class="sp_inline">熊本県上天草市大矢野町上1530-3
                    </td>
                </tr>
                <tr class="fade">
                    <th>加工場</th>
                    <td>
                        〒869-0634 <br class="sp_inline">熊本県宇城市小川町住吉293－1
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- 沿革 -->
<div class="over_history" id="history">
    <div class="tit_wrap">
        <div class="copy">
            沿革
        </div>
        <div class="eng">
            History
        </div>
    </div>
    <div class="detail_wrap">
        <div class="nenpyo">
            <table>
                <tbody>
                    <tr class="fade">
                        <th>昭和2年6月</th>
                        <td>光延磯吉と光延りえが種苗小売を目的に個人創業する。</td>
                    </tr>
                    <tr class="fade">
                        <th>昭和9年</th>
                        <td>
                            シンガポールから持ち帰った種子から光延磯吉が選抜を行い、「はなやさい天草1号」を販売開始、現在に至るまで天草地域で広く栽培されている。
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和9年</th>
                        <td>
                            「はなやさい天草2号」を天草農業高校の伊藤芳文先生と共同で開発（廃番品種）
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和25年1月</th>
                        <td>
                            合名会社 光延農園として法人化<br>
                            光延三博が代表社員に就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和42年10月</th>
                        <td>
                            株式会社 光延農園に称号変更<br>
                            光延啓介が代表取締役社長に就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和42年10月</th>
                        <td>
                            合名会社 光延農園 農機具部門を（株）熊本ヤンマー天草支店に移行
                            光延三博が支店長就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和49年10月</th>
                        <td>
                            熊本県本渡市中央新町１４−１０に本店移転
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和60年8月</th>
                        <td>
                            熊本県本渡市古川町１１−７に営業所を新築
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>昭和60年9月</th>
                        <td>
                            光延啓介が取締役会長に就任<br>
                            代わって光延隆三が代表取締役社長に就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成12年9月</th>
                        <td>
                            生花小売業「フラワートレイル」開業
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成20年2月</th>
                        <td>
                            光延隆三に変わり光延啓人が代表取締役社長に就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成20年6月</th>
                        <td>
                            熊本県天草市古川町１１−７に本店移転
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成22年4月</th>
                        <td>
                            熊本県上天草市大矢野町に大矢野店開設
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成26年8月</th>
                        <td>
                            農業部門開設トマトハウス栽培を開始する
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>平成29年8月</th>
                        <td>
                            苗生産会社「株式会社ウエストコーストファーム」設立
                            光延啓人が代表取締役社長に就任
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>令和2年4月</th>
                        <td>
                            益城倉庫開設
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>令和3年8月</th>
                        <td>
                            株式会社光延農園から株式会社アグリ・アーツに社名変更
                        </td>
                    </tr>
                    <tr class="fade">
                        <th>令和3年11月</th>
                        <td>
                            熊本農材株式会社を事業譲渡により買収
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="phzone pc_block">
            <div class="mgn_btm fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his01.jpg" alt="">
            </div>
            <div class="mgn_btm fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his02.jpg" alt="">
            </div>
            <div class="mgn_btm fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his03.jpg" alt="">
            </div>
            <div class="mgn_btm fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his04.jpg" alt="">
            </div>
            <div class="fade">
                <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his05.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="sp_block">
    <div class="slick_01">
        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his01.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his02.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his03.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his04.jpg" alt="">
        </div>

        <div class="top_slider_panel">
            <img src="<?= esc_url(get_template_directory_uri()); ?>/asset/img/over__his05.jpg" alt="">
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= esc_url(get_template_directory_uri()); ?>/asset/js/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.slick_01').slick({
            infinite: true, // 無限ループ
            autoplay: true, //オートプレイ
            slidesToShow: 2,
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
            responsive: [{}, ],
        });
    });
</script>


<?php get_footer(); ?>