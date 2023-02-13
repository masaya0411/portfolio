$(function () {

    // フロートヘッダーメニュー
    var targetHeight = $('.js-float-menu-target').height();
    $(window).on('scroll', function() {
        $('.js-float-menu').toggleClass('is-active', $(this).scrollTop() > targetHeight);
    });
  
    // モーダル・画像切り替え
    $('.js-modal-open').on('click', function() {
        var modalTarget = $(this).data('target');
        var $switchImgSubs = $('#' + modalTarget).find('.js-switch-img-sub');
        var $switchImgMain = $('#' + modalTarget).find('.js-switch-img-main');

        $('#' + modalTarget).fadeIn();

        $switchImgSubs.on('click',function(e){
            $switchImgMain.attr('src',$(this).attr('src'));
            });

    });
    $('.js-modal-close').on('click', function() {
        $('.js-modal').fadeOut();
    });

    //SPメニュー
    $('.js-toggle-sp-menu').on('click', function() {
        $(this).toggleClass('active');
        $('.js-toggle-sp-menu-target').toggleClass('active');
    });

    //メニューリンクを押したときにメニューを閉じる
    $('.js-close-menu-item').on('click', function() {
        $('.js-toggle-sp-menu').removeClass('active');
        $('.js-toggle-sp-menu-target').removeClass('active');
    });

    // ロード画面
    var loader = $('.loader-wrap');
	//ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
	setTimeout(function(){
		loader.fadeOut();
	},3000);

    // スクロールアニメーション
    function fadeAnime(){

        //ふわっと動くきっかけのクラス名と動きのクラス名の設定
        $('.js-fadeInUpTrigger').each(function(){ //fadeInUpTriggerというクラス名が
            var elemPos = $(this).offset().top+300; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
            $(this).addClass('fadeIn');
            // 画面内に入ったらfadeInというクラス名を追記
            }
        });
        
        //関数でまとめることでこの後に違う動きを追加することが出来ます
        $('.fadeInDownTrigger').each(function(){ //fadeInDownTriggerというクラス名が
            var elemPos = $(this).offset().top; //要素より、50px上の
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
            $(this).addClass('fadeDown');
            // 画面内に入ったらfadeDownというクラス名を追記
            }else{
            $(this).removeClass('fadeDown');
            // 画面外に出たらfadeDownというクラス名を外す
            }
        });
        
        
    }//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定
        
        // 画面をスクロールをしたら動かしたい場合の記述
          $(window).on('scroll',function (){
            fadeAnime();/* アニメーション用の関数を呼ぶ*/
          });// ここまで画面をスクロールをしたら動かしたい場合の記述
        // 画面が読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function(){
            setTimeout(() => {
                fadeAnime();/* アニメーション用の関数を呼ぶ*/
            }, 4000)
        });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
  });

    // 桜アニメーション
    window.addEventListener('DOMContentLoaded', () => {
        // コンテナを指定
        const section = document.querySelector('.p-charry-blossom');

        // 花びらを生成する関数
        const createPetal = () => {
        const petalEl = document.createElement('span');
        petalEl.className = 'p-charry-blossom__petal';
        const minSize = 10;
        const maxSize = 15;
        const size = Math.random() * (maxSize + 1 - minSize) + minSize;
        petalEl.style.width = `${size}px`;
        petalEl.style.height = `${size}px`;
        petalEl.style.left = Math.random() * innerWidth + 'px';
        section.appendChild(petalEl);

        // 一定時間が経てば花びらを消す
        setTimeout(() => {
            petalEl.remove();
        }, 10000);
        }

        // 花びらを生成する間隔をミリ秒で指定
        setTimeout(() => {
            setInterval(createPetal, 500);
        }, 5000)
    });