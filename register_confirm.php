<?php 
    if(isset($_GET['entered'])) { $group = $_GET['entered']; }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>入場を記録しました。-彩西祭2023</title>
        <meta name="description" content="メタディスクリプション" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon設定-->
        <link rel="apple-touch-icon" href="">
        <link type="image/x-icon" rel="icon" href="">
        <!-- OG image settings-->
        <meta property="og:description" content="メタディスクリプション">
        <meta property="og:image" content="file/og_image.png">
        <!--Google Fonts読み込み-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Kaku+Gothic+Antique:wght@500;700&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap" rel="stylesheet">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9BGKPTSGR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-V9BGKPTSGR');
        </script>
        <style>
            #topImage_mobile{
                width:100%;
            }

            #recorded{
                margin-top: 20px;
                width: 90vw;
                margin-left:5vw;
            }

            #recorded h1{
                font-family: 'Zen Kaku Gothic New';
                font-style: normal;
                font-weight: 900;
                font-size: 18px;
                color: #2e2e2e;
            }

            #recorded p{
                font-family: 'Zen Kaku Gothic New';
                font-style: normal;
                font-weight: 500;
                font-size: 14px;
                color: white;
                padding: 10px 20px;
                border-radius: 30px;
                background-color: black;
                display: inline-block;
                text-align: center;
            }

            #button{
                text-align: center;
                margin-bottom: 60px;
            }
        </style>
    </head>
    <body>
        <header>
            
            <img id="header_icon" src="files/header_icon.svg">
            <!--  ハンバーガーボタン  -->
            <div class="hamburger"><span></span><span></span><span></span></div>
            <nav class="hamburger_list">
                <div class="header_menu"><a href="index.html" class="header_menu"><h1>トップページ</h1></a></div>
                <div class="header_menu toggle_menu"><a href="index.html" class="header_menu"><h1>コンテンツ</h1></a><div class="subMenu"><span></span><span></span></div></div>
                <a class="menu_open" href="index.html"><h3>デジタル版パンフレット</h3></a>
                <a class="menu_open" href="index.html"><h3>テーマイラスト紹介</h3></a>
                <a class="menu_open" href="index.html"><h3>校内マップ</h3></a>
                <a class="menu_open" href="index.html"><h3>展示内容紹介</h3></a>
                <div class="header_menu"><a href="articles.html"><h1>記事一覧</h1></a></div>
                <div class="header_menu"><a href="about.html" class="header_menu"><h1>彩西祭について</h1></a></div>
            </nav>
            <div class="circle-bg"></div>
        </header>
        <div id="topImage">
            <img id="topImage_mobile" src="files/vote_top.png">
        </div>
        <div id="recorded" class="section">
            <h1><?php echo $group;?>への入場を記録しました。</h1>
            <div id="button">
                <a href="vote.php"><p>スタンプ一覧をみる</p></a>
            </div>
        </div>


        <footer>
            <div class="footer_contents">
                <div class="footer_icon"><img src="files/header_icon.svg" alt=""></div>
                <div class="footer_items" id="footer_items_1">
                    <a href="about.html"><img src="files/footer_about.svg" alt=""></a>
                    <a href="map.html"><img src="files/footer_map.svg" alt=""></a>
                    <a href="timetable.html"><img src="files/footer_timetable.svg" alt=""></a>
                </div>
                <div class="footer_items" id="footer_items_2">
                    <a href="disply.html"><img src="files/footer_display.svg" alt=""></a>
                    <a href="http://www.edu.pref.shizuoka.jp/hamamatsunishi-h/home.nsf/IndexFormView?OpenView"><img src="files/footer_HP.svg" alt=""></a>
                </div>
                <div class="school_addres"><img src="files/school_addres.svg" alt=""></div>
            </div>
        </footer>
        <!--jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--Hamburger buttond JS-->
        <script>
            $(function() {
                $('.hamburger').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.hamburger_list').addClass('active');
                        $(".circle-bg").addClass('circleactive');//丸背景にcircleactiveクラスを付与
                    } else {
                        $('.hamburger_list').removeClass('active');
                        $(".circle-bg").removeClass('circleactive');//丸背景にcircleactiveクラスを付与
                    }
                });

                $('.subMenu').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.subMenu').addClass('active');
                        $('.menu_open').addClass('active');
                    } else {
                        $('.subMenu').removeClass('active');
                        $('.menu_open').removeClass('active');
                    }
                });

            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>