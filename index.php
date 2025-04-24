<?php

error_reporting('E_MAIL');
ini_set('display_error','On');

//1.post送信されていた場合
if(!empty($_POST)){

  //本来は最初にバリデーションを行うが、今回は省略

  //A.変数にユーザー情報を代入
  $from = $_POST['email'];
  $subject = $_POST['name'];
  $comment = $_POST['comment'];

  //B.メッセージ表示用の変数を用意
  $success_msg = '';
  $error_msg = '';

  //C.メール送信プログラム（外部のphpファイル）を読み込む
  include('mail.php');

}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Masaya's Portfolio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Masaya Nishimuraのポートフォリオサイトです。これまで作成したサービスやスキルをご紹介しています。">
    <meta name="keywords" content="Masaya,ポートフォリオ,Webエンジニア">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:title" content="Masaya's Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Masaya Nishimuraのポートフォリオサイトです。これまで作成したサービスやスキルをご紹介しています。">
    <meta property="og:url" content="https://msy-a.com/portfolio/">
    <meta property="og:image" content="https://msy-a.com/portfolio/images/ogp.png">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="loader-wrap">
        <div class="loader">
            Loading...
        </div>
        <div id="load">
            <div>G</div>
            <div>N</div>
            <div>I</div>
            <div>D</div>
            <div>A</div>
            <div>O</div>
            <div>L</div>
        </div>
    </div>
    <header class="l-header">
        <div class="c-header js-float-menu">

            <!-- ハンバーガーメニュー -->
            <div class="c-header__menuTrigger js-toggle-sp-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="c-header__nav js-toggle-sp-menu-target js-close-menu-item">
                <ul class="c-header__list">
                    <li class="c-header__item js-close-menu-item">
                        <a href="#top" class="c-header__link js-float-menu">TOP</a>
                    </li>
                    <li class="c-header__item js-close-menu-item">
                        <a href="#about" class="c-header__link js-float-menu">ABOUT</a>
                    </li>
                    <li class="c-header__item js-close-menu-item">
                        <a href="#works" class="c-header__link js-float-menu">WORKS</a>
                    </li>
                    <li class="c-header__item js-close-menu-item">
                        <a href="#skill" class="c-header__link js-float-menu">SKILL</a>
                    </li>
                    <li class="c-header__item js-close-menu-item">
                        <a href="#contact" class="c-header__link js-float-menu">CONTACT</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <main class="l-main">

        <section id="top" class="p-hero p-charry-blossom js-float-menu-target">
            <h1 class="p-hero__title js-fadeInUpTrigger">Masaya Nishimura’s<br>Portfolio</h1>
        </section>

        <section id="about" class="p-about c-section js-fadeInUpTrigger">
            <h2 class="c-section__title">- ABOUT -</h2>
            <h2 class="c-section__title--shadow">ABOUT</h2>
            <div class="p-about__wrap">
                <div class="p-about__img">
                    <img src="images/profile.jpg" alt="プロフィール画像">
                </div>
                <p class="p-about__intro">
                    はじめまして!西村壮哉です。</br>
                    私が4月生まれということもあり、ポートフォリオに桜を降らせてみました！</br>
</br>
                    高知県出身の27歳で、フリーランスエンジニアとして活動しています。</br>
                    フロント・バック・インフラと幅広く経験してきましたが、最近は特にフロントエンドに力を入れて開発を行っています。</br>
</br>
                    小さい頃からスポーツをずっとやってきて、全国大会優勝チームのキャプテン経験などもあり、かなり本格的にスポーツに取り組んできました。</br>
</br>
                    自分の技術力を高めつつも、クライアントの方の利益向上に貢献するにはどうすればよいか、常々考えながら業務に取り組んでいます！
                </p>
            </div>
        </section>
        <section id="works" class="p-works c-section">
            <div class="c-section__container">
                <h2 class="c-section__title js-fadeInUpTrigger">- WORKS -</h2>
                <h2 class="c-section__title--shadow">WORKS</h2>
                <p class="c-section__description js-fadeInUpTrigger">
                    学習のアウトプットとして作成した成果物です。<br>
                    どうぞごゆっくりご覧ください。
                </p>
                <div class="p-works__wrap">
                    <div class="p-works__panel">
                        <a data-target="modal0" class="p-works__panel__link js-modal-open">
                            <div class="p-works__panel__img">
                                <img src="images/match1.png" alt="ポートフォリオ画像">
                            </div>
                        </a>
                        <p class="p-works__panel__title">match</p>
                    </div>
                    <div class="p-works__panel">
                        <a data-target="modal1" class="p-works__panel__link js-modal-open">
                            <div class="p-works__panel__img">
                                <img src="images/teaching_plan1.png" alt="ポートフォリオ画像">
                            </div>
                        </a>
                        <p class="p-works__panel__title">Teaching Plan</p>
                    </div>
                    <div class="p-works__panel">
                        <a data-target="modal2" class="p-works__panel__link js-modal-open">
                            <div class="p-works__panel__img">
                                <img src="images/spokatu1.png" alt="ポートフォリオ画像">
                            </div>
                        </a>
                        <p class="p-works__panel__title">スポカツ!!</p>
                    </div>
                </div>

                <!-- モーダル -->
                <div id="modal0" class="c-modal js-modal">
                    <div class="c-modal__bg js-modal-close"></div>
                    <div class="c-modal__content">
                        <button type="button" class="c-modal__close js-modal-close">
                            <img src="images/close.svg" alt="閉じる">
                        </button>
                        <div class="c-modal__wrap">
                            <div class="c-modal__text">
                                <h3 class="c-modal__title">
                                    <span>match</span>
                                </h3>
                                <p class="c-modal__description">
                                    エンジニアに特化した案件マッチングサービスです。案件マッチング版のメルカリのようなイメージで、実際の商品レベルを目指して作成した私の自信作です。クライアントとコミュニケーションを取ることができるメッセージ機能や、Twitterで案件をシェアすることができる機能などを実装し、ビジネスをより拡張できるよう工夫しました。
                                </p>
                                <h4 class="c-modal__sub-title">
                                    <span>使用技術</span>
                                </h4>
                                <p class="c-modal__description">
                                    HTML/CSS(SASS), CSS設計(FLOCSS) JavaScript, jQuery, Vue.js, PHP, Laravel, Git, GitHub
                                </p>
                                <p>
                                    <a href="https://match-engineer.com/" class="c-modal__link" target="_blank">
                                        <img src="images/demo.svg" alt="サービスアイコン">デモ
                                    </a>
                                    <a href="https://github.com/masaya0411/match.git" class="c-modal__link" target="_blank">
                                        <img src="images/github.svg" alt="GitHubアイコン">GitHub
                                    </a>
                                    <a href="https://qiita.com/msya0411/private/206625413fb58d21b03e" class="c-modal__link" target="_blank">
                                        <img src="images/qiita.png" alt="Qiitaアイコン" target="_blank">制作記事
                                    </a>
                                </p>
                            </div>
                            <div class="c-modal__img-wrap">
                                <div class="c-modal__img">
                                    <img src="images/match1.png" alt="ポートフォリオ画像" class="js-switch-img-main">
                                </div>
                                <div class="c-modal__thumbnails">
                                    <img src="images/match1.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/match2.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/match3.png" alt="サムネイル画像" class="js-switch-img-sub">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal1" class="c-modal js-modal">
                    <div class="c-modal__bg js-modal-close"></div>
                    <div class="c-modal__content">
                        <button type="button" class="c-modal__close js-modal-close">
                            <img src="images/close.svg" alt="閉じる">
                        </button>
                        <div class="c-modal__wrap">
                            <div class="c-modal__text">
                                <h3 class="c-modal__title">
                                    <span>Teaching Plan</span>
                                </h3>
                                <p class="c-modal__description">
                                    教員の長時間労働に問題を感じ、オンライン上で授業の計画を立てることができるサービスを作りました。ドラッグ＆ドロップでタスクを移動できるようにし、直観的に操作できるUIに仕上げました。
                                </p>
                                <h4 class="c-modal__sub-title">
                                    <span>使用技術</span>
                                </h4>
                                <p class="c-modal__description">
                                    HTML/CSS(SASS), Bootstrap4, JavaScript, jQuery, Chart.js, Vue.js, PHP, Laravel, Git, GitHub
                                </p>
                                <p>
                                    <a href="https://teachingplan.msy-a.com/" class="c-modal__link" target="_blank">
                                        <img src="images/demo.svg" alt="サービスアイコン">デモ
                                    </a>
                                    <a href="https://github.com/masaya0411/teaching_plan.git" class="c-modal__link" target="_blank">
                                        <img src="images/github.svg" alt="GitHubアイコン">GitHub
                                    </a>
                                    <a href="https://qiita.com/msya0411/items/96b6ed21999e72c8180f" class="c-modal__link" target="_blank">
                                        <img src="images/qiita.png" alt="Qiitaアイコン">制作記事
                                    </a>
                                </p>
                            </div>
                            <div class="c-modal__img-wrap">
                                <div class="c-modal__img">
                                    <img src="images/teaching_plan1.png" alt="ポートフォリオ画像" class="js-switch-img-main">
                                </div>
                                <div class="c-modal__thumbnails">
                                    <img src="images/teaching_plan1.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/teaching_plan2.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/teaching_plan3.png" alt="サムネイル画像" class="js-switch-img-sub">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal2" class="c-modal js-modal">
                    <div class="c-modal__bg js-modal-close"></div>
                    <div class="c-modal__content">
                        <button type="button" class="c-modal__close js-modal-close">
                            <img src="images/close.svg" alt="閉じる">
                        </button>
                        <div class="c-modal__wrap">
                            <div class="c-modal__text">
                                <h3 class="c-modal__title">
                                    <span>スポカツ!!</span>
                                </h3>
                                <p class="c-modal__description">
                                    学習初期に作成したお気に入りのスポーツ選手を登録することができるサービスです。Webサービスによくある基本的な機能をフルスクラッチで開発しました。この開発を通してWebサービスの機能がどうやって作られているかを深く学ぶことができ、大変勉強になりました。
                                </p>
                                <h4 class="c-modal__sub-title">
                                    <span>使用技術</span>
                                </h4>
                                <p class="c-modal__description">
                                    HTML/CSS, JavaScript, jQuery, PHP
                                </p>
                                <p>
                                    <a href="https://spokatu.net/" class="c-modal__link" target="_blank">
                                        <img src="images/demo.svg" alt="サービスアイコン">デモ
                                    </a>
                                    <a href="https://github.com/masaya0411/spokatu.git" class="c-modal__link" target="_blank">
                                        <img src="images/github.svg" alt="GitHubアイコン">GitHub
                                    </a>
                                    <!-- <a href="" class="c-modal__link" target="_blank">
                                        <img src="images/qiita.png" alt="Qiitaアイコン">制作記事
                                    </a> -->
                                </p>
                            </div>
                            <div class="c-modal__img-wrap">
                                <div class="c-modal__img">
                                    <img src="images/spokatu1.png" alt="ポートフォリオ画像" class="js-switch-img-main">
                                </div>
                                <div class="c-modal__thumbnails">
                                    <img src="images/spokatu1.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/spokatu2.png" alt="サムネイル画像" class="js-switch-img-sub">
                                    <img src="images/spokatu3.png" alt="サムネイル画像" class="js-switch-img-sub">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section id="skill" class="p-skill c-section js-fadeInUpTrigger">
            <div class="c-section__container">
                <h2 class="c-section__title">- SKILL -</h2>
                <h2 class="c-section__title--shadow">SKILL</h2>
                <p class="c-section__description">
                    自分のスキルをグラフにしてみました。<br>
                    業務では、Next.js＋Laravel＋AWSの環境で、新卒採用のための録画面接システムを開発してきました。<br>
                    自己学習では、JavaScriptやPHPを用いて、フレームワークを使用しないフルスクラッチでの開発も行い、スキル向上に努めています。<br>
                    今後は、フロントエンドのスキルやビジネス面のスキルをさらに磨いていきたいと思っています。
                </p>
                <div class="p-skill__chart">
                    <div class="p-skill__chart__panel">
                        <canvas id="myChartFront"></canvas>
                    </div>
                    <div class="p-skill__chart__panel">
                        <canvas id="myChartBack"></canvas>
                    </div>
                    <div class="p-skill__chart__panel">
                        <canvas id="myChartTools"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="p-contact c-section js-fadeInUpTrigger">
            <div class="c-section__container">
                <h2 class="c-section__title">- CONTACT -</h2>
                <h2 class="c-section__title--shadow">CONTACT</h2>
                <p class="c-section__description">
                    最後までご覧いただきありがとうございました。<br>
                    少しでも私について知っていただけたらとても嬉しいです。<br>
                    もし何かご質問やコメント等がありましたら、下記のフォームをご利用ください。
                </p>
                <div class="p-contact__wrap">
                    <p class="u-msg__success"><?php if(!empty($success_msg)) echo $success_msg; ?></p>
                    <p class="u-msg__error"><?php if(!empty($error_msg)) echo $error_msg; ?></p>
                    <form method="POST" class="p-contact__form">
                        <div class="p-contact__form__list">
                            <label for="name" class="p-contact__form__label">Name</label>
                            <input type="text" name="name" class="p-contact__form__input" required>
                        </div>
                        <div class="p-contact__form__list">
                            <label for="email" class="p-contact__form__label">Email</label>
                            <input type="email" name="email" class="p-contact__form__input" required>
                        </div>
                        <div class="p-contact__form__list">
                            <label for="comment" class="p-contact__form__label">Comment</label>
                            <textarea name="comment" class="p-contact__form__text" required></textarea>
                        </div>
                        <div class="p-contact__form__wrap">
                            <button type="submit" class="p-contact__form__btn">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="c-footer">
        <small class="c-footer__copy">Copyright©Masaya Nishimura. </small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/chart.js"></script>
    <script src="./js/app.js"></script>

</body>
</html>