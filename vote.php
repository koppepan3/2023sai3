
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投票システム-彩西祭2023</title>
        <meta name="description" content="メタディスクリプション" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/vote.css">
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
        <div id="section_howtovote" class="section">
            <div class="title" id="news_title">
                <img class="title_svg" src="files/howtovote.svg">
            </div>
            <p>1. 展示を回ってスタンプを記録する。<br>
                　紙で投票を行う場合は担当者から紙にスタンプをもらうようにしてください。<br>
               2. 投票をする。<br>
            　<a class="link" href="vote.php">こちら</a>より投票をお願いします。投票受付時間は6月2日(金)12:00～14:00、6月3日(土) 9:00～14:10となります。紙で投票を行う場合は投票所となっている2BHRまで足をお運びください。<br>
              <span class="red">※投票可能回数は1回となります。複数投票はできませんのでご注意ください。</span> 
            </p>
        </div>
        <div id="stamps_background">
            <div id="section_stamps" class="section">
                <div class="title" id="news_title">
                    <img class="title_svg" src="files/stamps.svg">
                </div>
                <div id="stamps">
                    <img class="stamp_imgs stamp_unavailable" id="group11" src="vote/stamp/11HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group12" src="vote/stamp/12HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group13" src="vote/stamp/13HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group14" src="vote/stamp/14HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group15" src="vote/stamp/15HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group16" src="vote/stamp/16HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group17" src="vote/stamp/17HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group21" src="vote/stamp/21HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group22" src="vote/stamp/22HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group23" src="vote/stamp/23HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group24" src="vote/stamp/24HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group25" src="vote/stamp/25HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group26" src="vote/stamp/26HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group31" src="vote/stamp/31HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group32" src="vote/stamp/32HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group33" src="vote/stamp/33HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group34" src="vote/stamp/34HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group35" src="vote/stamp/35HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group36" src="vote/stamp/36HR.png">
                    <img class="stamp_imgs stamp_unavailable" id="group41" src="vote/stamp/美術班.png">
                    <img class="stamp_imgs stamp_unavailable" id="group42" src="vote/stamp/写真班.png">
                    <img class="stamp_imgs stamp_unavailable" id="group43" src="vote/stamp/生活文化部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group44" src="vote/stamp/百人一首部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group45" src="vote/stamp/工学情報班.png">
                    <img class="stamp_imgs stamp_unavailable" id="group46" src="vote/stamp/自然科学班.png">
                    <img class="stamp_imgs stamp_unavailable" id="group47" src="vote/stamp/演劇部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group48" src="vote/stamp/吹奏楽部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group49" src="vote/stamp/弦楽部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group50" src="vote/stamp/国際文化部.png">
                    <img class="stamp_imgs stamp_unavailable" id="group51" src="vote/stamp/囲碁将棋部.png">
                </div>
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
                    <a href="tenji.html"><img src="files/footer_display.svg" alt=""></a>
                    <a href="http://www.edu.pref.shizuoka.jp/hamamatsunishi-h/home.nsf/IndexFormView?OpenView"><img src="files/footer_HP.svg" alt=""></a>
                    <a href="access.html"><img src="files/footer_access.svg" alt=""></a>
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
        <?php
        $count = 11;
        while($count <= 51) {
            if(isset($_COOKIE[$count])){
            if($_COOKIE[$count] == 1){
            ?>
        <script>
            $(<?php echo "\"#group".$count."\""; ?>).removeClass("stamp_unavailable");
        </script>
        <?php
            }}
           $count++;
        }
        ?>
    </body>
</html>